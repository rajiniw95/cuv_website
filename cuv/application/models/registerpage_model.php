<?php
class Registerpage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    function register_user($user){

       $this->db->insert('user', $user);
    }
}
