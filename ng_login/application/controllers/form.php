<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('form');
		$this->load->view('footer');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */