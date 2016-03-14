<?php

class Users extends C1_Controller{

public function show($user_id){

$data['results'] = $this->user_model->get_users($user_id, 'Brittni');

$this ->load->view('user_view', $data);
}