<?php
class Registerpage_model extends CI_Model {
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }

    //insert record to user table in database
    function insert_user($user){
       
        $this->db->insert('user',$user);
    }
}

//