<?php
class Correspondencepage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    function get_collab(){
    	$this->db->select("CollabID,Name,Institution,Role,Address,ContactNo, email,Comment,sendmail,sendphone,sendemail");
      $this->db->from('collab');
      $query = $this->db->get();
      return $query->result();
    }

    function get_donate(){
      $this->db->select("DonateID,Name,Address,ContactNo,email,Comment,sendmail,sendphone,sendemail");
      $this->db->from('donate');
      $query = $this->db->get();
      return $query->result();
    }

    function get_contact(){
      $this->db->select("ContactID,Name,ContactNo,email,Comment,sendphone,sendemail");
      $this->db->from('contact');
      $query = $this->db->get();
      return $query->result();
    }

    function delete_collab($id){
    	$this->db->where('CollabID', $id);
		  $this->db->delete('collab');
    }

    function delete_donate($id){
      $this->db->where('DonateID', $id);
      $this->db->delete('donate');
    }

    function delete_contact($id){
      $this->db->where('ContactID', $id);
      $this->db->delete('contact');
    }

}
