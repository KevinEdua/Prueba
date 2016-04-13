<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tablero extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		if($this->session->logeado){
			$this->load->view('tablero/inicio');
		}else{
			redirect('login');
		}
		
	}
    
    public function prueba(){
        
        $this->load->view('prueba');
    }
	
}