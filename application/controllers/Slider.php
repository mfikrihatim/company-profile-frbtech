<?php

    class Slider extends CI_Controller {
        public function index() {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('slider');
            $this->load->view('templates/footer');
        }
    }

?>