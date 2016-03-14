<?php
	class Addpattern extends MY_Model {
	const DB_TABLE = 'addpatterns';
	const DB_TABLE_PK = 'addpattern_id';
	/**
	* @var int
	*/
	public $addpattern_id;
	
	/**
	*  @var int
	*/
	public $patternbook_id;
	
	/**
	*  Publisher assigned issue number.
	* @var int
	*/

	public $addpattern_number;
	
	/**
	* @var string
	*/
	
	public $addpattern_date_publication;
	
	/**
	* Path to the file containing the cover image.
	* @var string
	*/
	
	public $addpattern_cover;
	
}
	