<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pattern extends CI_Controller {

	/**
	* Index page for Pattern controller.
	*/
	
	public function index() {
		$data = array();
		
		$this->load->model('Patternbook');
		$patternbook = new Pattern();
		$publicationbook ->load(1);
		$data['patternbook'] = $patternbook;
		
		$this->load->model('Addpattern');
		$addpattern = new Addpattern();
		$addpattern->load(1);
		$data['addpattern'] = $addpattern;
		
		$this->load->view('pattern');
	}
	
	/**
	* Add a pattern
	*/
	public function add() {
		//Populate 
		$this->load->model('Patternbook');
		$patternbooks = $this->Patternbook->get();
		$patternbook_form_options = array();
		foreach ($patternbooks as $id => $patternbook) {
			$patternbook_form_options[$id]= $patternbook->pattern_name;
		}
		$this->load->view('pattern_form', array (
			'patternbook_form_options'=> $patternbook_form_options,
		));
	}
}
?>