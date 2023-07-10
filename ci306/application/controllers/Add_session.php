<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_session extends CI_Controller {
    public function index()
	{
        $this->load->model('Admin_model');

        $allRegime = $this->Admin_model->getAllRegime();

        $data['regime']=$allRegime;

		$this->load->view('add_session',$data);
		
	}
    public function add(){

        $this->load->model('Add_session_model');

        $this->Add_session_model->ajouter_session();

        redirect(base_url('admin/'));
    }

        
}