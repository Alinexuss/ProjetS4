<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_exercice_model extends CI_Model {
    public $exercice;
    public $durree;
    public $rapportKcal;

    public function ajouter_exercice(){

        $this->load->database();

        $this->exercice = $this->input->post('exercice');

        $this->durree = $this->input->post('durree');

        $this->rapportKcal = $this->input->post('rapportKcal');

        $this->db->insert('exercice', $this);

    }
}