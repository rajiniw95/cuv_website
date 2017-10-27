<?php
/*class loginpage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    function login($username, $pwd)
 {
   $this -> db -> select('id, username, pwd');
   $this -> db -> from('login');
   $this -> db -> where('username', $username);
   $this -> db -> where('pwd', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }

    redirect('http://localhost/cuv_website/cuv/homepage');
 }
}
*/

