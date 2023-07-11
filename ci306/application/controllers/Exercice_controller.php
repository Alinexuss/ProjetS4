<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercice_controller extends CI_Controller {
    public function index()
	{
		$this->load->view('add_exercice');
		
	}
    public function add(){

        $this->load->model('Programme');

        $this->Programme->ajouter_exercice();

        redirect(base_url('admin/'));

    }
}