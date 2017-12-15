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
         

    $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[50]');
    
    $this->form_validation->set_rules('mobile', 'Mobile No.', 'regex_match[/^[0-9]{10}$/]|exact_length[10]');
    
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    $this->form_validation->set_rules('comment', 'Comment', 'required');


    if ($this->form_validation->run() == FALSE) 
    {
            $this->load->view('contactuspage');
            
        }

        else
         {

  
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
}



?>
