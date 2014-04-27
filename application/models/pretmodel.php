<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pretmodel extends CI_Model
{
		protected $_table='pret';
	
	/**
	 *	retourne tout les pret
	 */
	public function getAllPret()
	{
		return $this->db->select('*')
				->from($this->_table)
				->get()
				->result();
	}

	/**
	 *	retourne les objets d'un emprunteur pour un pret
	 */
	public function getObjectEmprunteur($emprunteur) 
	{
		return $this->db->select('*');
				->from($this->_table);
				->where('Emprunteur', "$emprunteur")
				->join('objet', "objet.Code = $this->_table.Objet")
				->get()
				->result();
	}

	/**
	 *	retourne le pret dont le numéro (valeur clé increment) est code
	 */
	public function getPretByNumero($code)
	{
		return $this->db->select('*')
				->from($this->_table)
				->where('Numero', (int)$code)
				->get()
				->result();
	}
	/**
	 *	insert l'objet d'un proprio  // par default statut = 1 (actif)
	 */
	public function addEmprunt($objet,$emprunteur,$statut=1)
	{
		$data = array(
			'Objet'			=> "$objet", // numero ou code :s gody story...
			'Emprunteur'	=> "$emprunteur",
			'Statut' 		=> "$statut"
		);
		$this->db->insert($this->_table, $data);
	}

	/**
	 *	change le statut d'un pret // par défault le desactive
	 */
	public function updatePretStatut($numero,$statut=0)
	{
		$tab = array('Statut' => (int)$statut );
		$this->db->where('Numero', $numero);
		$this->db->update($this->_table, $tab);
	}

}