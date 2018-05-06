<?php
class Login extends MY_Controller{


	public function index()
	{

     //$this->load->helper('url');
		    $this->load->helper('form');
		    $this->load->view('public/admin_login');
  }


public function admin_login(){

   $this->load->library('form_validation');
	 $this->form_validation->set_rules('username','User Name','required|alpha|max_length[10]');
	 $this->form_validation->set_rules('password', 'New Password','required|max_length[15]|min_length[6]|alpha_numeric');

	 if ($this->form_validation->run())
	 {
			echo "success";
	 }
	 else
	 {

     //echo "validation failed";
		 //
		 $this->load->view('public/admin_login');
	 }



}


}


?>
