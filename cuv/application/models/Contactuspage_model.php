<?php
class Contactuspage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    function contact_record($con){


       $this->db->insert('contact', $con);
    }
}


//