<?php

class donatepage_controller extends CI_Controller{

	public function __construct(){
     
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Donatepage_model');
        $this->load->library('session');
 
        }

    function index(){

        $this->load->view('donatepage');

    }

    public function donate_record(){

      //set validation rules
      $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[50]');

      $this->form_validation->set_rules('address', 'Address', 'max_length[100]');
    
      $this->form_validation->set_rules('mobile', 'Mobile No.', 'regex_match[/^[0-9]{10}$/]|exact_length[10]');
      
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

      $this->form_validation->set_rules('comment', 'Comment', 'required');


      //validation fails
      if ($this->form_validation->run() == FALSE) 
      {
              $this->load->view('donatepage');
          }

          //validation successful. insert record to donate table in database. 
          else
           {

          $don=array(
            

            'Name'=>$this->input->post('name'),
            'Address'=>$this->input->post('address'),
            'ContactNo'=>$this->input->post('mobile'),
            'email' => $this->input->post('email'),
            'Comment'=>$this->input->post('comment'),
            'sendmail'=>$this->input->post('Checkbox1'),
            'sendphone'=>$this->input->post('Checkbox2'),
            'sendemail'=>$this->input->post('Checkbox3'),


              );
            //print_r($user);
   
            $this->Donatepage_model->donate_record($don);
            
            redirect('http://localhost/cuv_website/cuv/');
           
           
          
           
          }
}
}




