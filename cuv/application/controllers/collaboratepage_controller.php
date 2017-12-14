<?php

class collaboratepage_controller extends CI_Controller{

	public function __construct(){
     
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Collaboratepage_model');
        $this->load->library('session');
 
        }

    function index(){

        $this->load->view('collaboratepage');

    }

    public function collab_record(){

      $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[50]');

      $this->form_validation->set_rules('address', 'Address', 'max_length[100]');
    
    $this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]|exact_length[10]');
    
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    $this->form_validation->set_rules('comment', 'Comment', 'required');


    if ($this->form_validation->run() == FALSE) 
    {

            $this->load->view('collaboratepage');
        }
        else
         {

        $col=array(
          

          'Name'=>$this->input->post('name'),
          'Institution'=>$this->input->post('institute'),
          'Role'=>$this->input->post('role'),
          'Address'=>$this->input->post('address'),
          'ContactNo'=>$this->input->post('mobile'),
          'email' => $this->input->post('email'),
          'Comment'=>$this->input->post('comment'),
          'sendmail'=>$this->input->post('Checkbox1'),
          'sendphone'=>$this->input->post('Checkbox2'),
          'sendemail'=>$this->input->post('Checkbox3'),


            );
 
          
          $this->Collaboratepage_model->collab_record($col);
          
          redirect('http://localhost/cuv_website/cuv/');
         
         
        
         
        }

        
 
         
        }
}


//
?>
