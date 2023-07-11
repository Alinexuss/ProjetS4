<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
    public $email;
    public $mdp;
    public function check_user()
    {
        $this->load->database();
		
		$this->mdp = $this->input->post('mdp');
		
		$this->email = $this->input->post('email');

        $sql="SELECT * from utilisateur where mdp= ? and email= ? ";
		
        $query=$this->db->query($sql,array($this->mdp,$this->email));
		
        return $query->result();
    } 

}