<?php

class upcomingeventspage_controller extends CI_Controller{

    function index(){

    	$this->load->model('Upcomingeventspage_model'); //load model

    	//retrieve upcoming events from database
    	$query = $this->Upcomingeventspage_model->get_events();
        $data['EVENTS'] = null;
        if($query){
            $data['EVENTS'] =  $query;
        }

        //load view with database events
        $this->load->view('upcomingeventspage',$data);

    }

    

 }
