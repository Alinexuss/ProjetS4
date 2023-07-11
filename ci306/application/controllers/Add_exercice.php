<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_exercice extends CI_Controller {
    public function index()
	{   
        $this->load->model('Admin_model');

        $seance= $this->Admin_model->getAllSeance();

        $data['seance'] = $seance;

		$this->load->view('add_exercice',$data);
		
	}
    public function add(){

        $this->load->model('Add_exercice_model');

        $this->Add_exercice_model->ajouter_exercice();

        redirect(base_url('admin/'));

    }
}
