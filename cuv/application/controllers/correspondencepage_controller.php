<?php

class correspondencepage_controller extends CI_Controller{

	 public function __construct(){
     
        parent::__construct();
        $this->load->model('Correspondencepage_model');
 
        }

    function index(){

    	$query1 = $this->Correspondencepage_model->get_collab();
        $data['COLLAB'] = null;
        if($query1){
            $data['COLLAB'] =  $query1;
        }

        $query2 = $this->Correspondencepage_model->get_donate();
        $data['DONATE'] = null;
        if($query2){
            $data['DONATE'] =  $query2;
        }

        $query3 = $this->Correspondencepage_model->get_contact();
        $data['CONTACT'] = null;
        if($query3){
            $data['CONTACT'] =  $query3;
        }

        $this->load->view('correspondencepage',$data);

    }

    function delete_collab($id)
    {
        $query = $this->Correspondencepage_model->delete_collab($id);
        redirect('http://localhost/cuv_website/cuv/correspondence');
    }

    function delete_donate($id)
    {
        $query = $this->Correspondencepage_model->delete_donate($id);
        redirect('http://localhost/cuv_website/cuv/correspondence');
    }

    function delete_contact($id)
    {
        $query = $this->Correspondencepage_model->delete_contact($id);
        redirect('http://localhost/cuv_website/cuv/correspondence');
    }
}
