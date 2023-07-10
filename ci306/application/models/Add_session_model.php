<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_session_model extends CI_Model {
    public $idRegime;
    public $duree;

    public function ajouter_session(){

        $this->load->database();

        $this->idRegime = $this->input->post('idRegime');

        $this->duree = $this->input->post('duree');

        $this->db->insert('session', $this);

    }
}