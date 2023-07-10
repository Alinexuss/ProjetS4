<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inscription_model extends CI_Model {

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
	public function getMax(){
		$this->load->database();
		$max="SELECT max(idUtilisateur) from utilisateur ";
        $query=$this->db->query($max);
		return $query->result();
	}
	public function get_last_id($max){
		$this->load->database();
		$sql="SELECT * FROM utilisateur where idUtilisateur = ? ";
		$query=$this->db->query($sql,$max);
		return $query->result();
    }

}