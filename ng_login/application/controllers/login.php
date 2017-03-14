<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model','login');
	}

	public function index()
	{
		$this->load->view('home');
	}
	public function view()
	{				
		$this->load->view('login');
	}
	Public function check_login()
	{
				
		$data= $this->login->check_login();
		echo json_encode($data);

	}
	Public  function users()
	{
		$data= $this->login->get_all_users();
		echo json_encode($data);
	}
	Public  function create()
	{
		$data = jsonify();	
		$result= $this->login->create_users();
		 echo json_encode($result);
	}

}

/* End of file  */
/* Location: ./application/controllers/ */