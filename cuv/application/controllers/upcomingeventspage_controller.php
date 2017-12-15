<?php

class upcomingeventspage_controller extends CI_Controller{

    function index(){

    	$this->load->model('Upcomingeventspage_model');

    	$query = $this->Upcomingeventspage_model->get_events();
        $data['EVENTS'] = null;
        if($query){
            $data['EVENTS'] =  $query;
        }

        $this->load->view('upcomingeventspage',$data);

    }

    

 }
