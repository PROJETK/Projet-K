<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model
{
	protected $_table='user';
	

	public function userConnect($log,$pass)
	{
		$trigger =  $this->db->select('*')
				->from($this->_table)
				->where('password',$pass)
				->where('login', $log)
				->get()
				->result();
			
			if(empty($trigger)){return false;}else{return true;} //condition ternaire super cool
			// non, ceci n'est pas une condition ternaire.
			// empty($trigger) ? return false : return true;
			// ceci en est une.
	}

	public function userSubscribe($log,$pass,$email)
	{
		$data = array('login'	=>"$log",
					  'password'=>"$pass",
					  'email'	=>"$email"
						);
		$this->db->insert($this->_table, $data);
	}
}