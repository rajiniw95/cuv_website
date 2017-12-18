<?php

class login extends CI_Controller{

  public function LoginUser(){

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('pwd', 'Password', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('loginpage');
    }
    else
    {
       $this->load->model('Loginpage_model');
       $result = $this-> Loginpage_model->LoginUser();
       $type = $result->LoginType;
       if ($type == 'user'){
         $user_data = array(
           "UserID" => $result->UserID,
           "FirstName" => $result->FirstName,
           "LastName" => $result->LastName,
           "NIC" => $result->NIC,
           "Gender" => $result->Gender,
           "Address" => $result->Address,
           "ContactNo" => $result->ContactNo,
           "email" => $result->email,
           "Faculty" => $result->Faculty,
           "Position" => $result->Position,
           "username" => $result->username,
           'loggedin' => TRUE

         );

         $this->session->set_userdata($user_data);
         redirect('userhomepage_controller/index');



       }
       if ($type == 'admin'){
         $user_data = array(
           "UserID" => $result->UserID,
           "FirstName" => $result->FirstName,
           "LastName" => $result->LastName,
           "NIC" => $result->NIC,
           "Gender" => $result->Gender,
           "Address" => $result->Address,
           "ContactNo" => $result->ContactNo,
           "email" => $result->email,
           "Faculty" => $result->Faculty,
           "Position" => $result->Position,
           "username" => $result->username,
           'loggedin' => TRUE

         );

         $this->session->set_userdata($user_data);
         redirect('adminhomepage_controller/index');



       }
       else{
         $this ->session -> set_flashdata('errmsg','Wrong Email and Password');
         redirect('loginpage_controller/index');

       }
     }

  }
  public function LogoutUser(){
    $this->session->unset_userdata('UserID');
    $this->session->unset_userdata('FirstName');
    $this->session->unset_userdata('LastName');
    $this->session->unset_userdata('NIC');
    $this->session->unset_userdata('Gender');
    $this->session->unset_userdata('Address');
    $this->session->unset_userdata('ContactNo');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('Faculty');
    $this->session->unset_userdata('Position');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('loggedin');

    redirect('loginpage_controller/index');
  }



}
