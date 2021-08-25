<?php

    class Services extends CI_Controller {
        public function index() {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('services');
            $this->load->view('templates/footer');
        }
    }

?>