<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Utilisateur');
    }

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

    public function upgradeGoldCompte() {
        $idUtilisateur = $this->Utilisateur->getIdUtilisateur();

        $this->Utilisateur->changeToGold($idUtilisateur);

        $data = " account upgrade ";

        redirect(base_url('home/'), $data );
    }
}