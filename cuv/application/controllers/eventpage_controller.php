<?php

class eventpage_controller extends CI_Controller{

	public function __construct(){
     
        parent::__construct();
        $this->load->model('Eventpage_model');
 
        }

  

    function index(){

    	//display event details on eventpage
        $query = $this->Eventpage_model->get_event('4');
        $data['EVENT'] = null;
        if($query){
   			$data['EVENT'] =  $query;
  		}

  		//query for confirmed participants table
        $query1 = $this->Eventpage_model->get_participants('4');
  		$data['PARTICIPANTS'] = null;
  		if($query1){
   			$data['PARTICIPANTS'] =  $query1;
  		}

  		/*$query2 = $this->Eventpage_model->checkgoing();
  		$data['GOING'] = null;
  		if($query2){
   			$data['GOING'] =  $query2;
  		}*/

  		$this->load->view('eventpage',$data);
 		}

 	function going(){
 		$query = $this->Eventpage_model->update_going('rajiniw95','4');
 		redirect('http://localhost/cuv_website/cuv/event');
 	}

 	function notgoing(){
 		$query = $this->Eventpage_model->update_notgoing('rajiniw95','4');
 		redirect('http://localhost/cuv_website/cuv/event');
 		}


 }

    
