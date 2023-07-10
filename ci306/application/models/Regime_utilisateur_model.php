<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Regime_utilisateur_model extends CI_Model {
    public $idObjectif;
    public $kilo;
    public $idUtilisateur;

    public function insert_type_regime(){
        $this->load->database();
		
		$this->$idObjectif = $this->input->post('$idObjectif');

        $this->kilo = $this->input->post('kilo');

        $this->idUtilisateur = $this->input->post('idUtilisateur');

		$this->db->insert('ObjectifUtilisateur', $this);
    }



}