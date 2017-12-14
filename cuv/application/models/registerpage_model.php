<?php
class Registerpage_model extends CI_Model {
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }


    function insert_user(){
       //$this->db->insert('user', $user);

       $this->load->model(Database_model);
       $cus_id = $this->Database_model->generateId('UserID','user','CUS');

       $user=array(
          'UserID'=>$cus_id,
          'FirstName'=>$this->input->post('fname'),
          'LastName'=>$this->input->post('lname'),
          'NIC'=>$this->input->post('nic'),
          'Gender'=>$this->input->post('Gender'),
          'Address'=>$this->input->post('address'),
          'ContactNo'=>$this->input->post('mobile'),
          'email' => $this->input->post('email'),
          'Faculty'=>$this->input->post('faculty'),
          'Position'=>$this->input->post('position'),
          //password sha1 encripting
          'Password'=>sha1($this->input->post('pwd'))
          
            );

       try
       {
            $this->db->insert('user',$user);
        }
        catch (Exception $e)
        {
            echo $e;
        }

        //        save data to db(return true or false to Register model)
        return $this->db->insert('user',$user);
    }
}