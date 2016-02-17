<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

        public function index() {
            $this->load->model('Pattern');
            $this->load->view('');





        }


        public function add(){
        ///Populate publications.
        $this->load->model('Pattern');
        $patterns = $this-> Pattern->get();
        $pattern_form}_options = array();
        foreach ($patterns as


