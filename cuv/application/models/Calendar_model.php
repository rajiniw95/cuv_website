<?php

class Contactuspage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

public function get_events($start, $end)
{
    return $this->db->where("start >=", $start)->where("end <=", $end)->get("calendar_events");
}


public function get_event($id)
{
    return $this->db->where("ID", $id)->get("calendar_events");
}



?>