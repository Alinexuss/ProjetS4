<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inscription_model extends CI_Model {

	public $idUtilisateur;
	public $nom;
	public $email;
	public $mdp;
    public $typeUtilisateur;

	public function insert_user(){
		$this->load->database();

		$this->nom = $this->input->post('nom');
		
		$this->mdp = $this->input->post('mdp');
		
		$this->email = $this->input->post('email');

        $this->typeUtilisateur = $this->input->post('typeUtilisateur');

		$this->db->insert('utilisateur', $this);
	}

	public function get_last_id(){
		$this->load->database();
		$sql="SELECT * from utilisateur where idutilisateur=(SELECT max(idutilisateur) from utilisateur) ";
		$query=$this->db->query($sql);
		return $query->result();
    }

}