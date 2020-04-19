<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('register'); #delete this if not needed, it's just placeholder to prevent error
	}
	
	public function register() {
        if ($this->input->method() == 'post') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $repassword = $this->input->post('re-password');
            
            if ($password != $repassword) {
                return $this->load->view('register', ['error_message' => 'Password and Re Enter Password isn\'t same']);
            }
            
            if ($this->tm->check_username($username)) {
                return $this->load->view('register', ['error_message' => 'Username already exist']);
            }
            
            $config = [
                'upload_path' => './assets/uploads/',
                'allowed_types' => 'jpg|png|gif|svg'
            ];
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            
            if (!$this->upload->do_upload('uploadImage')) {
                die($this->upload->display_errors());
                return $this->load->view('register', ['error_message' => 'The filetype you are attempting to upload is not allowed']);
            }
            
            if (!$this->tm->insert_new_profle(['username' => $username, 'password' => $password, 'profile_pic' => $this->upload->data()['file_name']])) {
                return $this->load->view('register', ['error_message' => 'Register gagal gan']);
            }
            
            $this->session->set_userdata('username', $username);
            redirect('profile');
        }
	}
}
?>