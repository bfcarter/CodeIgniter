<?php

class Form extends CI_Controller {

	public function create_login(){
	
	$encrypted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
	
	$data=array(
	
	'first_name'=>$this->input->post('first_name'),
	'last_name'->$this->input->post('last_name'),
	'Email_address'->$this->input->post('email_address'),
	'Username'=>$this->input->post('username'),
	'Password'=>$this->input->post('password'),
	);
	
	$insert_data = $this->db->insert('users', $data);
	
	return $insert_data;
	
	}
	
	public function login_user($username, $password){
	
	$this->db->where('username, $username);
	$result = $this->db->get('users');
	$db_password = $result->row(2)->password;
	if(password_verify($password, $db_password)){
	 return $result->row(0)->id;
	 } else{
	 	return false;
	 }
	}
}

	 
	