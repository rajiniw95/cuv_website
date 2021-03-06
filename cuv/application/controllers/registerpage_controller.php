<?php
class registerpage_controller extends CI_Controller {

    public function __construct(){
     
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Registerpage_model'); //model loaded
        $this->load->library('session');
 
        }

    function index(){

        $this->load->view('registerpage'); //registerpage loaded from index function

    }


    public function register_user(){

      //Validating FName Field
      $this->form_validation->set_rules('fname', 'FirstName', 'required|max_length[30]');
      //Validating LName Field
      $this->form_validation->set_rules('lname', 'LastName', 'required|max_length[30]');
      //Validating Mobile no. Field
      $this->form_validation->set_rules('nic', 'NIC No.', 'required|exact_length[10]');
      //Validating Email Field
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      //Validating Mobile no. Field
      $this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]|exact_length[10]');
      //Validating Address Field
      $this->form_validation->set_rules('address', 'Address', 'required|max_length[50]');
      //Validating password Field
      $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[4]|max_length[30]');
      //Validating re enter password Field
      $this->form_validation->set_rules('conf_pwd', 'Re-enter Password', 'required|matches[pwd]');
      //username set to be unique
      $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');



      //validation fails
      if ($this->form_validation->run() == FALSE) 
      {
              $this->load->view('registerpage'); //load registerpage again
          }

          //validation successful. insert post input to table user
          else
           {

          $user=array(
            
            'FirstName'=>$this->input->post('fname'),
            'LastName'=>$this->input->post('lname'),
            'NIC'=>$this->input->post('nic'),
            'Gender'=>$this->input->post('Gender'),
            'Address'=>$this->input->post('address'),
            'ContactNo'=>$this->input->post('mobile'),
            'email' => $this->input->post('email'),
            'Faculty'=>$this->input->post('faculty'),
            'Position'=>$this->input->post('position'),
            'username'=>$this->input->post('username'),
            //password sha1 encripting
            'Password'=>sha1($this->input->post('pwd')),
            'LoginType'=>"user"
            
              );


            $this->Registerpage_model->insert_user($user);
            
            redirect('http://localhost/cuv_website/cuv/rs');
           
           
          
           
          }
  }
  }
     