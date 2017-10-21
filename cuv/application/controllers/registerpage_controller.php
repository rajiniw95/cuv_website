<?php

class registerpage_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Registerpage_model');
    }


    //Validation for registration form
    function index() {
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating fname Field
        $this->form_validation->set_rules('fname', 'First Name', 'required|min_length[5]|max_length[30]');

        //Validating lname Field
        $this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[5]|max_length[30]');

        //Validating nic Field
        $this->form_validation->set_rules('nic', 'NIC No.', 'required|exact_length[10]|');

        //Validating address Field
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|max_length[100]');

        //Validating mobile Field
        $this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

        //Validating email Field
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		//Validating pwd Field      
		$this->form_validation->set_rules('pwd', 'Password', 'required|min_length[4]|max_length[100]');  


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registerpage');
        } else {
            //Setting values for tabel columns
            $data = array(
            	'FirstName' => $this->input->post('fname'),
                'LastName' => $this->input->post('lname'),
                'NIC' => $this->input->post('nic'),
                'Gender' => $this->input->post('Gender'),
                'Address' => $this->input->post('address'),
                'ContactNo' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'Faculty' => $this->input->post('faculty'),
                'Position' => $this->input->post('position'),
                'password' => $this->input->post('pwd')
            );
            //Transfering data to Model
            $this->insert_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            $this->load->view('registerpage', $data);
        }
    }

}

?>
























