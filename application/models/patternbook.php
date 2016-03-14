<?php
	class patternbook extends MY_Model {
	const DB_TABLE = 'patternbooks';
	const DB_TABLE_PK = 'patternbook_id';
	/**
	* unique identifier.
	* @var int
	*/
	
	public $patternbook_id;
	
	/**
	* patternbook name.
	* @var string 
	*/
	public $patternbook_name;
}