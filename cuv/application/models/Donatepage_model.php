<?php
class Donatepage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    function donate_record($don){

       $this->db->insert('donate', $don);
    }
}
