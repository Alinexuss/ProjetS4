<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Utilisateur extends CI_Model {
    public $email;
    public $mdp;
    // LOGIN
    public function LogIn() {
        $this->load->database();

        $this->email = $this->input->post('email');

        $this->mdp = $this->input->post('password');

        $sql= "SELECT * FROM utilisateur WHERE email = ? AND mdp = ? ";
        
        $query = $this->db->query($sql,$email,$mdp);
        
        return $query->result();
    }
   
}