<?php

class MY_Model extends CI_Model {

    const DB_TABLE = 'abstract';
    const DB_TABLE_PK = 'abstract';

    private function insert() {
        $this->db->insert($this::DB_TABLE, $this);
        $this->{$this::DB_TABLE_PK} = $this->db->insert_id();

    }

    private function update() {
        $this->db->update($this::DB_TABLE, $this, $this::DB_TABLE_PK);
        }

        public function populate($row) {
            foreach ($row as $key => $value) {
                $this->$key = $value;
            }
        }

        public function load