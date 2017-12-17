<?php
class Updatepage_model extends CI_Model {
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }


    function update_user($user,$UserId){


$this->db->where('UserID', $UserId);
$this->db->update('user', $user);

    }
    function update_photo($data,$UserId){


$this->db->where('UserID', $UserId);
$this->db->update('user', $data);

    }
}
