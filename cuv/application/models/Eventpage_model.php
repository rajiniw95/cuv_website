<?php
class Eventpage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }


    //display event details
    function get_event($id){
    	$this->db->select("EventTitle,Time,Date,Venue,OrganizerName,OrganizerMobile,Description");
    	$query = $this->db->where('EventID', $id); //id from route
  		$this->db->from('event');
  		$query = $this->db->get();
  		return $query->result();
    }

    //get participants list
    function get_participants($id){
    	$query = $this->db->query("SELECT u.FirstName, u.LastName , e.username FROM user u, event_participants e WHERE e.Username = u.username AND e.EventID='$id' AND e.Going=1"); 
  		return $query->result();
    }

    //update going 
    function update_going($uname,$id){
    	$query = $this->db->query("UPDATE event_participants SET Going=1 WHERE Username = '$uname' AND EventID = '$id'"); 

    }


    //update not going
    function update_notgoing($uname,$id){
    	$query = $this->db->query("UPDATE event_participants SET Going=0 WHERE Username = '$uname' AND EventID = '$id'"); //eventID from route

    }

    /*function checkgoing(){
    	$query = $this->db->query("SELECT Going FROM event_participants WHERE Username = 'rajiniw95' AND EventID = 1");

  		return $query->result();
    }*/

}
