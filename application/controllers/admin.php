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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
