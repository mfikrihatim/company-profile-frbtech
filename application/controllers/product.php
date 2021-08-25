<?php

    class Product extends CI_Controller {
        public function index() {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('product');
            $this->load->view('templates/footer');
        }
    }

?>