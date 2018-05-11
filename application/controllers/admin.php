<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


  public function dashboard(){

     $this->load->model('articlesmodel');
     $articles=$this->articlesmodel->articles_list();
     $this->load->view('admin/dashboard',['articles' => $articles]);


  }


public function add_articles(){


$this->load->helper('form');
$this->load->view('admin/add_article');


}
public function store_articles(){
  $this->load->library('form_validation');
  if($this->form_validation->run('add_articles_rules')) {

      $post=$this->input->post();

      unset($post['submit']);
      $this->load->model('articlesmodel');
      if($this->articlesmodel->add_article($post)){

              $this->session->set_flashdata('feedback','articcles added succesfully');
              $this->session->set_flashdata('feedback_class','alert-dismissible alert-danger');
              $this->load->view('admin/dashboard');

}else {
  $this->session->set_flashdata('feedback','articcles not added try again');
  $this->session->set_flashdata('feedback_class','alert-dismissible alert-danger');
}


    return redirect('admin/dashboard');


     }
else {
  $this->load->view('admin/add_article');
}


}



public function edit_articles(){


}

public function delete_articles(){


}


public function __construct()
    {
        // call Grandpa's constructor
        parent::__construct();
        if(! $this->session->userdata('user_id')){
            return redirect('login');
        }

    }

}
