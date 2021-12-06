<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    private $table = 'user';
    public $username;
    public $password;
    public $status_id;
 
    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'status_id',
                'label' => 'status_id',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function login() 
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
                            ->where('password', $password)
                            ->limit(1)
                            ->get('user');
                            
        if($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    
}
