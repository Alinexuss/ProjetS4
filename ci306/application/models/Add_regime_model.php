<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_regime_model extends CI_Model {
    public $aliment;
    public $heure;
    public $rapportKcal;
    public $prixUnitaire;

    public function ajouter_regime(){

        $this->load->database();

        $this->aliment = $this->input->post('aliment');

        $this->heure = $this->input->post('heure');

        $this->rapportKcal = $this->input->post('rapportKcal');

        $this->prixUnitaire = $this->input->post('prixUnitaire');

        $this->db->insert('regime', $this);

    }
}