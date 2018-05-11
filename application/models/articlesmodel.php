<?php
class Articlesmodel extends CI_Model {

public function articles_list(){

  //$q=$this->db->query('select * FROM users where uname = $username and pword = $password');
$user_id=$this->session->userdata('user_id');
//echo $user_id;
$query=$this->db
       ->select('title,user_id')
       ->from('articles')
       //->where('user_id',$user_id)
       ->where('user_id',$user_id)
       ->get();
    return $query->result();
}



public function add_article($array){

  return $this->db->insert('articles',$array);


}


}

?>
