<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
	{
        
		$this->load->view('login');
		
	}
    public function authentification()
    {
        $this->load->model('Login_model');

        $this->load->library('session');

        $user = $this->Login_model->check_user();

        foreach($user as $users){
            $session = $users;
        }

        if($user!= null)
        {   
            if($session->typeUtilisateur==1){
                
                redirect(base_url('admin/'));
            }
            else if($session->typeUtilisateur==0)
            {   
                $this->session->set_userdata('idUtilisateur',$session);

                redirect(base_url('home/'));
            }
            
        }
        else
        {
            redirect(base_url('login/'));
        }

    }

}