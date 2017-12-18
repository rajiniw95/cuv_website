<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {
  public function update($id, $data)
     {
        try{
           $this->db->where('UserID',$id)->limit(1)->update('user', $data);
           return true;
        }catch(Exception $e){
           echo $e->getMessage();
        }
     }
}
