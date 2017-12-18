<?php
class Loginpage_model extends CI_Model {
function LoginUser(){
  $username = $this -> input ->post('username');
<<<<<<< HEAD
  $password= sha1($this-> input->post('pwd'));

=======
<<<<<<< HEAD
  $password= sha1($this-> input->post('pwd'));
  
=======
  $Password=sha1($this->input->post('pwd'));
>>>>>>> 0b9fea5fc23271d81eec78a50fd3a71dd78e6cac
>>>>>>> deb3d540369fef448043397c314c4096e169a90b

  $this -> db -> where ('username',$username);
  $this -> db -> where ('password',$password);
  $respond = $this -> db ->get('user');
  $data = $respond->result()[0];

  
  if ($respond -> num_rows()==1){
    return $respond -> row(0);
    die();


  }
  else{
    return False;
  }
}
}
