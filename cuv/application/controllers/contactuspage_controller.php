<?php

class contactuspage_controller extends CI_Controller{

	public function __construct(){
     
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Contactuspage_model');
        $this->load->library('session');
 
        }

    function index(){

        $this->load->view('contactuspage');

    }

    public function contact_record(){

        $col=array(
          

          'Name'=>$this->input->post('name'),
          'ContactNo'=>$this->input->post('mobile'),
          'email' => $this->input->post('email'),
          'Comment'=>$this->input->post('comment'),
          'sendphone'=>$this->input->post('Checkbox1'),
          'sendemail'=>$this->input->post('Checkbox2'),


            );
    
 
          $this->Contactuspage_model->contact_record($col);
          
          redirect('http://localhost/cuv_website/cuv/');
         
         
        
         
        }
}



?>
