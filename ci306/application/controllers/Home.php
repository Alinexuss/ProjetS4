<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
	{
		$this->load->view('home');
		
	}
    public function deconnection()
    {
        $this->load->library('session');

        $this->session->sess_destroy();

        redirect(base_url('inscription/'));
    }
}