<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_utilisateur extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$idUtilisateur = $this->session->userdata('idUtilisateur');

		$data['idUtilisateur'] = $idUtilisateur;

		$this->load->view('regime_utilisateur',$data);
		
	}
    public function add()
	{
		$this->load->model('Regime_utilisateur_model');

		$this->Regime_utilisateur_model->insert_type_regime();

		redirect(base_url('home/'));

	}

}