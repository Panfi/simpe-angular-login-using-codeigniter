<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	Public function check_login()
	{
		$data = jsonify();				
		$where=array('username'=>$data->username,'password'=>@$data->password,'status'=>1);
		return $this->db->get_where('login_details',$where)->row();
	}
	Public function get_all_users()
	{
		$username = jsonify();
		$where=array('status'=>1);
		return $this->db->select('username,f_name,l_name')->get_where('login_details',$where)->result();
	}
	Public function create_users()
	{
		$data = jsonify();
		$datas=array(
			'f_name' =>$data->firstName,
			'l_name' =>$data->lastName,
			'password' =>$data->password,
			'username' =>$data->username,
			'status'=>1);
		$count = $this->db->get_where('login_details',$datas)->num_rows();
		if($count!=0){
			$status = array('message'=>'User already exist');
		
		}else{
		  $this->db->insert('login_details',$datas);
		  $status = array('status'=>true,'message'=>'User created !');
		}

			return $status;
	}

}

/* End of file  */
/* Location: ./application/models/ */