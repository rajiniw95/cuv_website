<?php
class Eventpage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }


    //display event details
    function get_event(){
    	$this->db->select("EventTitle,Time,Date,Venue,Date,Venue,NoParticipants,OrganizerName,OrganizerMobile,EventType,Description");
    	$query = $this->db->where('EventID', 1);
  		$this->db->from('event');
  		$query = $this->db->get();
  		return $query->result();
    }

    //get participants list
    function get_participants(){
    	$query = $this->db->query("SELECT u.FirstName, u.LastName , e.username FROM user u, event_participants e WHERE e.Username = u.username AND e.EventID=1 AND e.Going=1");

  		return $query->result();
    }

    //update going 
    function update_going(){
    	$query = $this->db->query("UPDATE event_participants SET Going=1 WHERE Username = 'rajiniw95' AND EventID = 1");

    }

    //update not going
    function update_notgoing(){
    	$query = $this->db->query("UPDATE event_participants SET Going=0 WHERE Username = 'rajiniw95' AND EventID = 1");

    }

    function checkgoing(){
    	$query = $this->db->query("SELECT Going FROM event_participants WHERE Username = 'rajiniw95' AND EventID = 1");

  		return $query->result();
    }

}
