<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {
    public function getAllUtilisateur()
    {
        $this->load->database();

        $sql="SELECT * from utilisateur ";
		
        $query=$this->db->query($sql);
		
        return $query->result();
    } 
    public function getAllRegime()
    {
        $this->load->database();

        $sql="SELECT * from regime ";
		
        $query=$this->db->query($sql);
		
        return $query->result();
    }
    public function getAllExercice()
    {
        $this->load->database();

        $sql="SELECT * from exercice ";
		
        $query=$this->db->query($sql);
		
        return $query->result();
    }
}