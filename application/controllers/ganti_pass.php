
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ganti_pass extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Ganti_pass_m");

        if($this->session->userdata('status_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
          redirect('auth/login');
        }
    }

    public function index()
    {

        $data["title"] = "List Data User";
        $data["data_user"] = $this->Ganti_pass_m->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('ganti_pass/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $user = $this->Ganti_pass_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data user berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("ganti_pass");
        }
        $data["title"] = "Tambah Data user";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('ganti_pass/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('ganti_pass');

        $user = $this->Ganti_pass_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data user berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("ganti_pass");
        }
        $data["title"] = "Ganti Password";
        $data["data_user"] = $user->getById($id);
        if (!$data["data_user"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('ganti_pass/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->Ganti_pass_m->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }

}
