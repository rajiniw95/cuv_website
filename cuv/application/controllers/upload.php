<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {

                $config['upload_path']          = './img/profilepic';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('updateprofile', $error);
                }
                else
                {
                        $data = array('url' => $this->upload->data());


                      $UserID=$this->session->userdata('UserID');
                      $this->load->model('Updatepage_model');
                      $this->Updatepage_model->update_photo($data,$UserID);

                      redirect('http://localhost/cuv_website/cuv/updateprofile');
                }
        }
}
?>
