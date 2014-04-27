<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Objectmodel extends CI_Model
{
		protected $_table='objet';
	
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

	/**
	 *	retourne les objets d'un propriétaire
	 */
	public function getUserObject($proprio) // WTF? pourquoi il a mis varchar comme propriétaire???? bref osef
	{
		return $this->db->select('Code,Titre')
				->from($this->_table)
				->where('Proprietaire', $proprio)
				->get()
				->result();
	}

	/**
	 *	retourne les objets dont le titre ressemble (fonction de recherche)
	 */
	public function getAllObject($title) // WTF? pourquoi il a mis varchar comme propriétaire???? bref osef
	{
		return $this->db->select('Code,Titre')
				->from($this->_table)
				->like('Titre', $title)
				->get()
				->result();
	}

}