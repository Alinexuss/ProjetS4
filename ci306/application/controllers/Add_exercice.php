<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_exercice extends CI_Controller {
    public function index()
	{
		$this->load->view('add_exercice');
		
	}
    public function add(){

        $this->load->model('Add_exercice_model');

        $this->Add_exercice_model->ajouter_exercice();

        redirect(base_url('admin/'));

    }
}