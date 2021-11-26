<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    private $table = 'user';

    public $username;
    public $password;
    public $status_id;
     
    public function rules()
    {
        return [
            ['field' => 'username',  
            'label' => 'username',  
            'rules' => 'trim|required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'trim|required'],

			['field' => 'status_id',
            'label' => 'status_id',
            'rules' => 'trim|required']
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }
	
	public function getByStatusId()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->query("SELECT * FROM $this->table WHERE status_id = 1");
        return $query->result();
    }

    public function save()
    {
		$post = $this->input->post();
		$this->username = $post["username"];
		$this->password = $post["password"];
		$this->status_id = $post["status_id"];

		$this->db->insert($this->table, $this);
    }

    public function update()
    {
		$post = $this->input->post();
		$this->username = $post["username"];
		$this->password = $post["password"];
		$this->status_id = $post["status_id"];
		
		$this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
