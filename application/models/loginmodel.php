<?php
class Loginmodel extends CI_Model {

public function login_valid($user,$pass){

  //$q=$this->db->query('select * FROM users where uname = $username and pword = $password');
//print_r($_POST);

$q=$this->db->select('*')->where(['uname' => $user,'pword' => $pass])->get('users')->row()->id;

//print_r($q); exit;

if($q !=0){
    return $q;  //which retuenin the id now
      //print_r($this->db->last_query());
     }
else
   {
     return FALSE;
   }

}

}

?>
