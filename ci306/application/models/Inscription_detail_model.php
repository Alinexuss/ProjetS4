<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inscription_model extends CI_Model {
    public $taille;
    public $genre;
    public $poid;
    public $idUtilisateur;

    public function insert_user_detail(){
		$this->load->database();

        $this->taille = $this->input->post('taille');

        $this->poids = $this->input->post('poids');

        $this->genre = $this->input->post('genre');

        $this->idUtilisateur = $this->input->post('idUtilisateur');

		$this->db->insert('detailUtilisateur', $this);
    }
}
