<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_seance extends CI_Controller {
    public function index()
	{
        $this->load->model('Admin_model');

        $allExercice = $this->Admin_model->getAllExercice();

        $data['exercice']=$allExercice;

		$this->load->view('add_seance',$data);
		
	}
    public function add(){

        $this->load->model('Add_seance_model');

        $this->Add_seance_model->ajouter_seance();

        redirect(base_url('admin/'));
    }

        
}