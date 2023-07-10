<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_seance_model extends CI_Model {
    public $idExercice;
    public $repetition;

    public function ajouter_seance(){

        $this->load->database();

        $this->idExercice = $this->input->post('idExercice');

        $this->repetition = $this->input->post('repetition');

        $this->db->insert('seance', $this);

    }
}