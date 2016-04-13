<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogos extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		if($this->session->logeado){
			$this->load->view('catalogos/inicio');
		}else{
			redirect('login');
		}
		
	}
	
}