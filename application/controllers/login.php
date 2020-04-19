<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('login'); #delete this if not needed, it's just placeholder to prevent error
	}
	
	public function login(){
        if ($this->input->method() == 'post') {
            #call login() function (the one that's in the model) and check the result
            #if true set session and fill it with the inputted username and redirect to '/profile'
            #if not true show error message
            $data = ['username' => $this->input->post('username'), 'password' => $this->input->post('password')];
            //die(var_dump($data));
            if ($this->tm->login($data)) {
                $this->session->set_userdata('username', $data['username']);
                redirect('/profile');
            } else {
                $this->load->view('login', ['error_message' => 'Username or Password isn\'t correct']);
            }
        }
	}
}
?>