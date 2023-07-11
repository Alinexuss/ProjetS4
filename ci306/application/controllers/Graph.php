<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graph extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
       
        $this->load->database();

        $data = $this->db->query('SELECT typeObjectif, COUNT(*) AS count FROM objectifutilisateur_detail_detail GROUP BY typeObjectif')->result_array();
        
        $graphData = array();

        foreach ($data as $row) {
            $graphData[] = array($row['typeObjectif'], (int)$row['count']);
        }
    
        $this->load->view('graph', array('graphData' => $graphData));
    }
}
