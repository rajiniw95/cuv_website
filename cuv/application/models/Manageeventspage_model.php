<?php
class Manageeventspage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    function add_event($event){

       $this->db->insert('event', $event);
    }

    function get_events(){
    	$this->db->select("EventID,EventTitle,Time,Date,Venue");
      $this->db->where('Date >=',date("Y-m-d"));
  		$this->db->from('event');
  		$query = $this->db->get();
  		return $query->result();
    }

    function delete_event($id){
    	$this->db->where('EventID', $id);
		  $this->db->delete('event');
    }

}
