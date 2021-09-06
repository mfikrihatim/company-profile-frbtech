<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ganti_pass_m extends CI_Model
{
    private $table = 'user';
    public $username;
    public $password;

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'password_lama',
                'label' => 'password',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'password_baru1',
                'label' => 'password_baru1',
                'rules' => 'trim|required|matches[password_baru2]'
            ],
            [
                'field' => 'password_baru2',
                'label' => 'password_baru2',
                'rules' => 'trim|required|matches[password_baru1]'
            ],
        ];
    }

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where id='$id'
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            "password" => $this->input->post('password')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "password" => $this->input->post('password')
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }

}