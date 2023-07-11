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
    public function getAllSession()
    {
        $this->load->database();

        $sql="SELECT * from session_detail ";
		
        $query=$this->db->query($sql);
		
        return $query->result();
    }
    public function getAllSeance()
    {
        $this->load->database();

        $sql="SELECT * from seance_detail ";
		
        $query=$this->db->query($sql);
		
        return $query->result();
    }
    public function delete_regime($id)
    {
        $this->load->database();

        $this->db->where('idRegime',$id);

        $this->db->delete('regime');

    }
    public function delete_exercice($id)
    {
        $this->load->database();

        $this->db->where('idExercice',$id);

        $this->db->delete('exercice');

    }
    public function delete_session($id)
    {
        $this->load->database();

        $this->db->where('idSession',$id);

        $this->db->delete('session');

    }
    public function delete_seance($id)
    {
        $this->load->database();

        $this->db->where('idSeance',$id);

        $this->db->delete('seance');

    }
}