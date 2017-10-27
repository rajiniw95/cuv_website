<?php
class Collaboratepage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    function collab_record($col){


       $this->db->insert('collab', $col);
    }
}
