<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_regime extends CI_Controller {
    public function index()
	{
		$this->load->view('add_regime');
		
	}
    public function add(){

        $this->load->model('Add_regime_model');

        $this->Add_regime_model->ajouter_regime();

        redirect(base_url('admin/'));

    }
}