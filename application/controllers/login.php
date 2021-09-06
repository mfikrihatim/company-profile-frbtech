
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index(){
        $this->load->view('login/index');
    }
}

// class Login extends CI_Controller
// {
//     public function __construct()
//     {
//         parent::__construct();
//         $this->load->model("Login_m"); //load model login
//     }

//     //method pertama yang akan di eksekusi
//     public function index()
//     {
//         $this->load->view('templates/header', $data);
//         $this->load->view('templates/sidebar');
//         $this->load->view('login/index', $data);
//         $this->load->view('templates/footer');
//     }

//     public function login()
//     {

//     }

//     //method add digunakan untuk menampilkan form tambah data login
//     public function add()
//     {
//         $login = $this->Login_m; //objek model
//         $validation = $this->form_validation; //objek form validation
//         $validation->set_rules($login->rules()); //menerapkan rules validasi pada Login_m
//         //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada Login_m
//         if ($validation->run()) {
//             $login->save();
//             $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
//             Data login berhasil disimpan. 
//             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//             <span aria-hidden="true">&times;</span>
//           </button></div>');
//             redirect("login");
//         }
//         $data["title"] = "Tambah Data login";
//         $this->load->view('templates/header', $data);
//         $this->load->view('templates/sidebar');
//         $this->load->view('login/add', $data);
//         $this->load->view('templates/footer');
//     }
// }