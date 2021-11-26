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
		$data["data_product"] = $this->Product_m->getByStatusId();
        $data["data_client"] = $this->Client_m->getByStatusId();
        $data["data_excellence"] = $this->Excellence_m->getByStatusId();
        $data["data_portofolio"] = $this->Portofolio_m->getByStatusId();
        $data["data_services"] = $this->Services_m->getByStatusId();
        $data["data_setCon"] = $this->SetCon_m->getByStatusId();
        $data["data_slider"] = $this->Slider_m->getByStatusId();
        $this->load->view('index/index', $data);
    }
}
