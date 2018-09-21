<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inputJadwalTayang extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('inputMenu_m');
    }
 
	function index(){
		$data = array(
            'title' => 'Data Makanan',
            'cemalcemilFood' => $this->inputMenu_m->get_data()
        );
        $this->load->view('inputJadwalTayang',$data);
	}

	}

?>