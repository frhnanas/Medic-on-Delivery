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
            if ($this->akun->login($data)) {
                $akun = $this->akun->login($data)->row_array();
                $cek = array(
                    'username' => $akun['username'],
                    'role' => $akun['role']
                );
                $this->session->set_userdata($cek);
                if ($this->session->userdata('role') == 0){
                    $this->load->view('admin_home');
                } else {
                    $this->load->view('user_home');
                }
            } else {
                $this->load->view('login', ['error_message' => 'Username atau Password salah!']);
            }
        }
    }
    
    public function register() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $repassword = $this->input->post('re-password');
        $alamat = $this->input->post('alamat');
            
        if ($password != $repassword) {
        return $this->load->view('register', ['error_message' => 'Password dan Re-Password tidak sama!']);
        }
        
        if ($this->akun->cek_username($username)) {
        return $this->load->view('register', ['error_message' => 'Username telah digunakan!']);
        }
            
        $input_akun = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'alamat' => $this->input->post('alamat'),
			'role' => 1,
        ];
        
		$this->akun->create_akun($input_akun);
        $this->session->set_userdata('username', $username);
        redirect('user/go_login');
    }

}
?>