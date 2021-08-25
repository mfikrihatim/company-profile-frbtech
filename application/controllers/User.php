<?php

    class User extends CI_Controller {
        public function index() {
            $data['user'] = $this->m_user->show_data()->result();

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('user', $data);
            $this->load->view('templates/footer');
        }

        public function post_data() {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $data = array(
                'username' => $username,
                'password'=> $password,
            );

            $this->user->input_data($data, 'user');
            redirect('user/index');
        }
    }

?>