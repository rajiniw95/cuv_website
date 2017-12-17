<?php

class updateprofile_controller extends CI_Controller{

    function index(){

        $this->load->view('updateprofile');

    }


    public function register_user(){



    //Validating FName Field
    $this->form_validation->set_rules('fname', 'FirstName', 'required|min_length[3]|max_length[30]');
    //Validating LName Field
    $this->form_validation->set_rules('lname', 'LastName', 'required|min_length[3]|max_length[30]');
    //Validating Mobile no. Field
    $this->form_validation->set_rules('nic', 'NIC No.', 'required|exact_length[10]');

    //Validating Email Field
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //Validating Mobile no. Field
    $this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]|exact_length[10]');
    //Validating Address Field
    $this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|max_length[50]');
    //Validating password Field
    $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[4]|max_length[30]');
    //Validating re enter password Field
    $this->form_validation->set_rules('conf_pwd', 'Re-enter Password', 'required|matches[pwd]');




    if ($this->form_validation->run() == FALSE)
    {
            $this->load->view('updateprofile');
        }
        else
         {

        $user=array(

          'FirstName'=>$this->input->post('fname'),
          'LastName'=>$this->input->post('lname'),
          'NIC'=>$this->input->post('nic'),

          'Address'=>$this->input->post('address'),
          'ContactNo'=>$this->input->post('mobile'),
          'email' => $this->input->post('email'),


          //password sha1 encripting
          'Password'=>sha1($this->input->post('pwd'))

            );
            $UserID=$this->session->userdata('UserID');

          $this->load->model('Updatepage_model');
          $this->Updatepage_model->update_user($user,$UserID);

          redirect('http://localhost/cuv_website/cuv/homepage');




        }
}
}
