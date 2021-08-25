<?php

    class Setting_contact extends CI_Controller {
        public function index() {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('setting_contact');
            $this->load->view('templates/footer');
        }
    }

?>