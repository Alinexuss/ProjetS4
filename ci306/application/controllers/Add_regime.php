<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_regime extends CI_Controller {
    public function index()
	{   
        $this->load->model('Admin_model');

        $session= $this->Admin_model->getAllSession();

        $data['session'] = $session;

		$this->load->view('add_regime',$data);
		
	}
    public function add(){

        $this->load->model('Add_regime_model');

        $this->Add_regime_model->ajouter_regime();

        redirect(base_url('admin/'));

    }
    public function delete_session($id)
    {

        $this->load->model('Admin_model');

        $this->Admin_model->delete_session($id);

        redirect(base_url('add_regime/'));

    }
}