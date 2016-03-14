<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}
function signup()
{
	$this->load->view('includes/header');
	$this->load->view('signup_form');
	$this->load->view('includes/footer');
}

function create_member()
{
	$this->load->library('form_validation');
	
	//validation rules
	$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
	$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
	$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_check_if_emil_exists');
	$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|callback_check_if_username_exists');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
	$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');


	if ($this->form_validation->run() == FALSE) //didnt validate
	{
		
		$this->load->view('login');
	}
	
	else
	{
		$this->load->model ('membership_model');
		if ($query = $this->membership_model->create_member())
		{
			$data['account_created' = 'Your account has been created. <br/><br/>
			
			$this->load->view('