<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransfertModel extends CI_Model
{
		protected $_table='transfert';
		////////////////////////////////////
		////////////////////////////////////
		//
		//	Dans tout les cas user1 envoi vers user2 !
		//  user1 == pretteur, user2 == grosse pince qui gratte a tout le monde.
		//
		////////////////////////////////////
		////////////////////////////////////
	
	/**
	 *	retourne tout les pret
	 */
	public function getAllTansfert()
	{
		return $this->db->select('*')
				->from($this->_table)
				->get()
				->result();
	}

	/**
	 *	retourne les objets qu'un user a pretter
	 */
	public function getObjectUser($user) 
	{
		return $this->db->select('*')
				->from($this->_table)
				->where('user1', "$user")
				->join('objet', "objet.code = $this->_table.objet")
				->get()
				->result();
	}

	/**
	 *	retourne les objets qu'un user a emprunter
	 */
	public function getObjectEmprunter($user2) 
	{
		return $this->db->select('*')
				->from($this->_table)
				->where('user2', "$user2")
				->join('objet', "objet.code = $this->_table.objet")
				->get()
				->result();
	}

	/**
	 *	retourne pret par son id
	 */
	public function getPretById($id)
	{
		return $this->db->select('*')
				->from($this->_table)
				->where('id', (int)$id)
				->get()
				->result();
	}
	/**
	 *	insert un transfert // par default statut = 1 (actif)
	 */
	public function addEmprunt($user1,$user2,$objet,$actif=1)
	{
		$data = array(
			'objet'			=> (int)$objet,
			'user1'			=> "$user1",
			'user2' 		=> "$user2",
			'actif'			=> (int)$actif
		);
		$this->db->insert($this->_table, $data);
	}
	
	/**
	 *	insert un transfert // par default statut = 1 (actif)
	 */
	public function endEmprunt($idObjet)
	{
		$this->db-->update($this->_table, array("actif", "0"), array("objet", $idObjet));
	}

	/**
	 *	change le statut d'un transfert // par défault le desactive
	 */
	public function updatePretStatut($id,$statut=0)
	{
		$tab = array('Statut' => (int)$statut );
		$this->db->where('id', (int)$id);
		$this->db->update($this->_table, $tab);
	}

}