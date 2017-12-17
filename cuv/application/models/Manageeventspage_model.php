<?php
//this page enables admin to add, view and delete events in database
//accessible from adminhome page tabs

class Manageeventspage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    //add event to database
    function add_event($event){

       $this->db->insert('event', $event);
    }

    //retrieve events from database
    function get_events(){
    	$this->db->select("EventID,EventTitle,Time,Date,Venue");
      $this->db->where('Date >=',date("Y-m-d"));
  		$this->db->from('event');
      $this->db->order_by('Date','ASC');
  		$query = $this->db->get();
  		return $query->result();
    }

    //delete event in database, given the id from the view
    function delete_event($id){
    	$this->db->where('EventID', $id);
		  $this->db->delete('event');
    }

}
