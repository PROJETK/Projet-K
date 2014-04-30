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
	public function getUserObject($user) // WTF? pourquoi il a mis varchar comme propriétaire???? bref osef
	{
		return $this->db->select('Code,Titre,actif')
				->from($this->_table)
				->where('Proprietaire', "$user")
				->join('transfert', "transfert.objet = $this->_table.Code", "left outer")
				->get()
				->result();
	}

	/**
	 *	retourne l'objet dont l valeur du code est $number
	 */
	public function getObjectByNumber($code)
	{
		return $this->db->select('*')
				->from($this->_table)
				->where('Code', (int)$code)
				->get()
				->result();
	}
	/**
	 *	insert l'objet d'un proprio
	 */
	public function addUserObject($user,$titre)
	{
		$data = array(
			'Titre'			=> "$titre",
			'Proprietaire'	=> "$user"
		);
		$this->db->insert($this->_table, $data);
	}

	/**
	 *	modifie le titre d'un objet dont le code est $code
	 */
	public function updateObject($code, $titre)
	{
		$tab = array('Titre' => "$titre" );
		$this->db->where('Code', $code);
		$this->db->update($this->_table, $tab);
	}

}