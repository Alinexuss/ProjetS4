<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    public function index() 
    { 
        $this->load->view('login'); 
    }

    public function checkUser() {
        $this->load->model('Utilisateur');

        $bool = $this->Utilisateur->LogIn();

        $error = "You don't have a user yet";

        if ($bool == null) {

            redirect(base_url('login/'), $error);
        } 
        else {
            $this->session->set_userdata('utilisateur', $bool);

            redirect(base_url('home/'));
        }
    }

}