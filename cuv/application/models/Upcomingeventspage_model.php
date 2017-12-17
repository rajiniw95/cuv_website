<?php

class Upcomingeventspage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    //retrieve records from event table, date is greater than today and sorted in ascending order
    function get_events(){
    	$this->db->select("EventID,EventTitle,Time,Date,Venue");
      $this->db->where('Date >=',date("Y-m-d"));
  		$this->db->from('event');
      $this->db->order_by('Date','ASC');
  		$query = $this->db->get();
  		return $query->result();
    }

  }

