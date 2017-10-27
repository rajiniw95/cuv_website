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



?>
