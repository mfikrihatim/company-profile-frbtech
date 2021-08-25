<?php

    class Portofolio extends CI_Controller {
        public function index() {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('portofolio');
            $this->load->view('templates/footer');
        }
    }

?>