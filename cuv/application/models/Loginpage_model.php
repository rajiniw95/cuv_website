<?php
class Loginpage_model extends CI_Model {
function LoginUser(){
  $username = $this -> input ->post('username');
  $Password=sha1($this->input->post('pwd'));

  $this -> db -> where ('username',$username);
  $this -> db -> where ('password',$password);
  $respond = $this -> db ->get('user');
  if ($respond -> num_rows()==1){
    return $respond -> row(0);
    die();
  }else{
    return False;
  }
}
}
