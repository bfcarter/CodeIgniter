<?php

class Information extends CI_Model {

    const DB_TABLE = 'information';
    const DB_TABLE_PK = 'issue_id';

    public $informtaion_id;

    public $pattern_id;

    public $information_number;

    public $information_date_pattern;

    public $information_cover;

}