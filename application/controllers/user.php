<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('akun');
        $this->load->model('obat');
        $this->load->model('transaksi');
	}
	
	public function index() {
		$this->load->view('home');
	}
    
    public function home_user() {
		$this->load->view('home_user');
	}

    public function go_login(){
        $this->load->view('login');
    }

    public function go_register(){
        $this->load->view('register');
    }

    public function logout(){
        $dataLogin = ['username','role'];
        $this->session->unset_userdata($dataLogin);
        $this->load->view('home');
    }

	public function login(){
        if ($this->input->method() == 'post') {
            $data = ['username' => $this->input->post('username'), 'password' => $this->input->post('password')];
            if ($this->akun->login($data)) {
                $akun = $this->akun->login($data)->row_array();
                $cek = array(
                    'akun_id' => $akun['akun_id'],
                    'username' => $akun['username'],
                    'role' => $akun['role']
                );
                $this->session->set_userdata($cek);
                if ($this->session->userdata('role') == 0){
                    $this->load->view('home_admin');
                } else {
                    $this->load->view('home_user');
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

    public function updateakun() {
		$data = [
            'akun_id' => $this->input->post('akun_id'),
            'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
            'alamat' => $this->input->post('alamat'),
            'role' => 1
		];

        $akun_id = $this->input->post('akun_id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $repassword = $this->input->post('re-password');

        if ($password != $repassword) {
            return $this->load->view('user_akun', ['error_message' => 'Password dan Re-Password tidak sama!']);
        }

		$this->akun->update_akun($akun_id, $data);
		redirect('user/home_user');
    }

    public function readakun(){
        $data['data'] = $this->akun->read_edit_akun($this->session->userdata('akun_id'))->result();
        $this->load->view('user_akun', $data);
    }

    public function readbeli(){
        // $data['data'] = $this->obat->read_beli($this->session->userdata('akun_id'))->result();
        $this->load->view('user_beli');
    }


    public function readriwayat(){
        $data['data'] = $this->transaksi->read_riwayat($this->session->userdata('akun_id'))->result();
        $this->load->view('user_riwayat', $data);
    }

}
?>