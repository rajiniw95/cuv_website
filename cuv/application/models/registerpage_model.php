<?php

class Registerpage_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
  public function form_insert($data){
 //Inserting in Table(user) of Database(cuv) 
       $this->db->insert('user', $data);  
       //data defined in registerpage_controller
    }    
   
}

?>
