<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ganti_pass_m extends CI_Model
{
	private $table = 'user';

	public $username;
	public $password;
	 
	public function rules()
	{
		return [
			['field' => 'password',
			'label' => 'password',
			'rules' => 'trim|required'],
		];
	}

	public function getBySession()
    {
        $this->db->get_where($this->table, ['id' => $this->session->userdata('id')])->row_array();
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
	