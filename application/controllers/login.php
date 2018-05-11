<?php
class Login extends MY_Controller{


	public function __construct(){

	    parent::__construct();
	  	$this->load->helper('url');
	  	$this->load->model('loginmodel');
	        $this->load->library('session');

	}

	public function index()
    	  {
        //$this->load->helper('url');

        if($this->session->userdata('user_id'))
				   return redirect('admin/dashboard');

		    $this->load->helper('form');
		    $this->load->view('public/admin_login');
        }


public function admin_login(){

   $this->load->library('form_validation');
	 $this->form_validation->set_rules('username','User Name','required|alpha|max_length[10]');
	 $this->form_validation->set_rules('password', 'New Password','required|max_length[15]|min_length[6]|alpha_numeric');

	 if ($this->form_validation->run())
	 {
		 $username=$this->input->post('username');// username is form feild name
		 $password=$this->input->post('password');//password is form feild name

        //$this->load->model('loginmodel');
        $login_id=$this->loginmodel->login_valid($username,$password);
				$data = $this->session->set_userdata(array(
    'user_id'  => $login_id,
));


       if($login_id !=0)
				 {

				//$this->load->library('session');
        $this->session->userdata('userid',$login_id);
				//$this->load->view('admin/dashboard');
//print_r($this->session->userdata);

           redirect('admin/dashboard');

				   }
				else
				  {
            //login failed
          //echo "failed";
        $this->session->set_flashdata('login_failed','wrong password try again');
            return redirect('login');


				 }

	 }
	 else
	 {

     //echo "validation failed";
		 //
		 $this->load->view('public/admin_login');
	 }



}

public function logout(){
   $this->session->unset_userdata('user_id');
  return redirect('login');

}

}


?>
