<?php

class adminhomepage_controller extends CI_Controller{

    public function __construct(){
     
        parent::__construct();
        
 
        }

    //load adminhomepage in index function
    function index(){

        $this->load->view('adminhomepage');

    }

    
		
	
}




	

     


   


