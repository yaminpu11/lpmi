<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_branda extends CI_Model{

	public function __construct()
    {
        parent::__construct();
        // Load database prodi
        $this->load->library('JWT');
        
    }

    
    function visi()
    {	

    	$query =$this->db->query("SELECT * from db_lpmi.content where IDType = 3 ")->result_array();

//    	print_r($query);exit;

    	return $query[0];
        
    }

}

?>