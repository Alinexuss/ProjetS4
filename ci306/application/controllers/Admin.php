<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index()
	{
        
        $this->load->model('Admin_model');

        $allUtilisateur = $this->Admin_model->getAllUtilisateur();

        $allRegime = $this->Admin_model->getAllRegime();

        $allExercice = $this->Admin_model->getAllExercice();

        $data['utilisateur']=$allUtilisateur;
        $data['regime']=$allRegime;
        $data['exercice']=$allExercice;
        
		$this->load->view('admin',$data);
		
	}
    

}