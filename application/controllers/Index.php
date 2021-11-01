<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Product_m");
		$this->load->model("Client_m");
		$this->load->model("Excellence_m");
		$this->load->model("Portofolio_m");
		$this->load->model("Services_m");
		$this->load->model("SetCon_m");
		$this->load->model("Slider_m");

    }

    public function index()
    {
        $this->load->view('index/index');
    }
}
