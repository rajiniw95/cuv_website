<?php

class manageeventspage_controller extends CI_Controller{

    public function __construct(){
     
        parent::__construct();
        $this->load->model('Manageeventspage_model');
 
        }

    function index(){
        
        //display event details on eventpage
        $query = $this->Manageeventspage_model->get_events();
        $data['EVENTS'] = null;
        if($query){
            $data['EVENTS'] =  $query;
        }

        $this->load->view('manageeventspage',$data);
    }

    //create event
    public function insert_event(){

    	$this->form_validation->set_rules('title', 'Event Title', 'required');

    	$this->form_validation->set_rules('time', 'Time', 'required');

    	$this->form_validation->set_rules('date', 'Date', 'required');

    	$this->form_validation->set_rules('venue', 'Venue', 'required');

    	$this->form_validation->set_rules('org_name', 'Organizer Name', 'required');

    	$this->form_validation->set_rules('org_mob', 'Organizer Mobile Number', 'required|regex_match[/^[0-9]{10}$/]|exact_length[10]');

    	$this->form_validation->set_rules('description', 'Event Description', 'required');


    	if ($this->form_validation->run() == FALSE) 
    	{
            $query = $this->Manageeventspage_model->get_events();
            $data['EVENTS'] = null;
            if($query){
            $data['EVENTS'] =  $query;
            }

            $this->load->view('manageeventspage',$data);
            }

        else
        {

        	$evt=array(
          
	          'EventTitle'=>$this->input->post('title'),
	          'Time'=>$this->input->post('time'),
	          'Date'=>$this->input->post('date'),
	          'Venue' => $this->input->post('venue'),
	          'OrganizerName'=>$this->input->post('org_name'),
	          'OrganizerMobile'=>$this->input->post('org_mob'),
	          'Description'=>$this->input->post('description')
	          
            );
          
 
          	$this->Manageeventspage_model->add_event($evt);
          
          	redirect('http://localhost/cuv_website/cuv/manageevents');


		}

	}

    function deleteEvent($id)
    {
        $query = $this->Manageeventspage_model->delete_event($id);
        redirect('http://localhost/cuv_website/cuv/manageevents');
    }


}




	

     


   


