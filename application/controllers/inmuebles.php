<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inmuebles extends CI_Controller {
 //public $data='null';
	 function __construct(){
	 	parent::__construct();
	 	$this->load->helper('url');
	 	$this->load->helper('form');
	 	$this->load->model('moviliarias_model');
	 }
	    public function index(){
	    $data['obtener'] = $this->moviliarias_model->get();
   $this->load->view('parts/header');
   $this->load->view('parts/div');
     $this->load->view('inmuebles/inmuebles',$data);
         $this->load->view('telotengo');
    
	    	
	    }
	      public    function  Viewinmuebles(){
	      	$this->load->view('parts/header');
	      	$this->load->view('parts/div');
	      	$this->load->view('inmuebles/viewinmuebles');
	      	   $this->load->view('telotengo');
	      }





}


