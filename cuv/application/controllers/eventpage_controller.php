<?php

class eventpage_controller extends CI_Controller{

	public function __construct(){
     
        parent::__construct();
        $this->load->model('Eventpage_model');
 
        }


    function index(){        
 		}


    //function for button on-click. eventID passed
    function loadevent($id){

      //model function to retreive event details from event table
      $query = $this->Eventpage_model->get_event($id);
          $data['EVENT'] = null;
          if($query){
          $data['EVENT'] =  $query;
        }

        //query for confirmed participants table
        $query1 = $this->Eventpage_model->get_participants($id);
        $data['PARTICIPANTS'] = null;
        if($query1){
          $data['PARTICIPANTS'] =  $query1;
        }

        $this->load->view('eventpage',$data);

    }


   	//function for going button
    function going(){
   		$query = $this->Eventpage_model->update_going('rajiniw95','4');
   		redirect('http://localhost/cuv_website/cuv/event');
   	}

   	//function for not going function
    function notgoing(){
   		$query = $this->Eventpage_model->update_notgoing('rajiniw95','4');
   		redirect('http://localhost/cuv_website/cuv/event');
   		}


 }

    
