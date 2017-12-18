<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Gallery_model');
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library(['form_validation','session']);
   }

   public function update(){



         /* Start Uploading File */
         $config =   [
                     'upload_path'   => './img/',
                        'allowed_types' => 'gif|jpg|png'
                     ];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
              echo "hihkkk";
                    $this->upload->display_errors();
            }
            else
            {
              echo "hihi";
              $UserID=$this->session->userdata('UserID');
                    $file = $this->upload->data();
                    //print_r($file);
                    $data = [
                             'url'          => $file['file_name']
                          ];
                    $this->Gallery_model->update($UserID,$data);


                    $user=array(

                      'url'          => ($file['file_name'])
                      

                        );
                        $UserID=$this->session->userdata('UserID');
                        $this->session->set_userdata($user);





               $this->session->set_flashdata('message','New image has been added..');
               redirect('http://localhost/cuv_website/cuv/updateprofile');
            }
      }
   }
