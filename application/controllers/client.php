<?php

    class Client extends CI_Controller {
        public function index() {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('client');
            $this->load->view('templates/footer');
        }
    }

?>