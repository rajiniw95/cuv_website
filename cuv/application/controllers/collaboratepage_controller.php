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
          //print_r($user);
 
          $this->Collaboratepage_model->collab_record($col);
          
          redirect('http://localhost/cuv_website/cuv/');
         
         
        
         
        }
}



?>
