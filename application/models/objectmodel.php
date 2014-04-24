<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Objectmodel extends CI_Model
{
		protected $_table='object';
	
	/**
	 *	retourne tout les objets bdd
	 */
	public function getAllObject()
	{
		return $this->db->select('*')
				->from($this->_table)
				->get()
				->result();
	}

}