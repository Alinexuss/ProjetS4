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
    public function delete_regime($id)
    {

        $this->load->model('Admin_model');

        $this->Admin_model->delete_regime($id);

        redirect(base_url('admin/'));

    }

    public function delete_exercice($id)
    {

        $this->load->model('Admin_model');

        $this->Admin_model->delete_exercice($id);

        redirect(base_url('admin/'));

    }
    

}