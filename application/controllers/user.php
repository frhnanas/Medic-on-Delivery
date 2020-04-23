<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('akun');
	}
	
	public function index()
	{
		$this->load->view('home');
	}
    
    public function go_login(){
        $this->load->view('login');
    }

    public function go_register(){
        $this->load->view('register');
    }

	public function login(){
        if ($this->input->method() == 'post') {
            $data = ['username' => $this->input->post('username'), 'password' => $this->input->post('password')];
            if ($this->akun->login($data)->num_rows() > 0) {
                $akun = $this->akun->login($data)->row_array();
                $tes = array(
                    'username' => $akun['username'],
                    'role' => $akun['role']
                );
                $this->session->set_userdata($tes);
                if ($this->session->userdata('role') == 0){
                    $this->load->view('home_admin');
                } else {
                    $this->load->view('home_user');
                }
            } else {
                $this->load->view('login', ['error_message' => 'Username or Password isn\'t correct']);
            }
        }
    }
    
    public function register() {
        if ($this->input->method() == 'post') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $repassword = $this->input->post('re-password');
            $alamat = $this->input->post('alamat');
            
            if ($password != $repassword) {
                return $this->load->view('register', ['error_message' => 'Password and Re Enter Password isn\'t same']);
            }
            
            if ($this->akun->check_username($username)) {
                return $this->load->view('register', ['error_message' => 'Username already exist']);
            }
            
            if (!$this->akun->tambah_akun(['username' => $username, 'password' => $password, 'alamat' => $alamat, 'role' => 1])) {
                return $this->load->view('register', ['error_message' => 'Register gagal']);
            }
            
            $this->session->set_userdata('username', $username);
            redirect('user/go_login');
        }
	}
}
?>