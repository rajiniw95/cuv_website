<?php
//this page enables admin to view and delete collaborate/donate/contactus records in database
//accessible from the tabs in admin homepage

//$id from view

class Correspondencepage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    //VIEW COLLABORATE
    function get_collab(){
    	$this->db->select("CollabID,Name,Institution,Role,Address,ContactNo, email,Comment,sendmail,sendphone,sendemail");
      $this->db->from('collab');
      $query = $this->db->get();
      return $query->result();
    }

    //VIEW DONATE
    function get_donate(){
      $this->db->select("DonateID,Name,Address,ContactNo,email,Comment,sendmail,sendphone,sendemail");
      $this->db->from('donate');
      $query = $this->db->get();
      return $query->result();
    }

    //VIEW CONTACT US
    function get_contact(){
      $this->db->select("ContactID,Name,ContactNo,email,Comment,sendphone,sendemail");
      $this->db->from('contact');
      $query = $this->db->get();
      return $query->result();
    }

    //DELETE COLLABORATE
    function delete_collab($id){
    	$this->db->where('CollabID', $id);
		  $this->db->delete('collab');
    }

    //DELETE DONATE
    function delete_donate($id){
      $this->db->where('DonateID', $id);
      $this->db->delete('donate');
    }

    //DELETE CONTACTUS
    function delete_contact($id){
      $this->db->where('ContactID', $id);
      $this->db->delete('contact');
    }

}
