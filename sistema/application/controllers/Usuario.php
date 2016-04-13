<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('Usuario_model','usuario');
		$this->load->model('Usuario_tipo_model','usuario_tipo');
	}
		
	public function index(){
		
		$this->form_validation->set_rules('correo', 'Correo', 'required');
		$this->form_validation->set_rules('contrasena', 'Contraseña', 'required');
		if ($this->form_validation->run() == TRUE){
			$ejecutado = $this->autenticar();
		}else{
			$this->load->view('usuario/login');
		}
		
		
	}
		
	public function listado(){

		if($this->session->logeado){
			$datos['usuarios'] = $this->usuario->todos();
			$datos['tipos'] = $this->usuario_tipo->todos_activos();
			
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('correo', 'Corre', 'required');
			$this->form_validation->set_rules('contrasena', 'Contraseña', 'required');
			if ($this->form_validation->run() == TRUE){
				$this->nuevo();
				redirect('catalogos/usuarios');
			}else{
				$this->load->view('usuario/listado',$datos);
			}
		}else{
			redirect('login');
		}
	}
	
	private function nuevo(){
		$this->usuario->usu_nombre = $this->input->post('nombre');
		$this->usuario->usu_tipo_id = $this->input->post('tipo');
		$this->usuario->usu_correo = $this->input->post('correo');
		$this->usuario->usu_contrasena = MD5($this->input->post('contrasena'));
		$this->usuario->usu_imagen = 'imagen';
		$ejecutado = $this->usuario->crear();
	}
	
	private function editar(){

	}

	private function autenticar(){
		$this->usuario->usu_correo = $this->input->post('correo');
		$this->usuario->usu_contrasena = $this->input->post('contrasena');
		$datos = $this->usuario->consultar();
		print_r($datos);
		
		if(count($datos) == 1){
			
			$usuarioSesion = array(
			'nombre'  => $datos[0]->usu_nombre,
			'correo'  => $datos[0]->usu_correo,
			'imagen'  => $datos[0]->usu_imagen,
			'tipo'	  => $datos[0]->tip_usu_nombre,
			'logeado' => TRUE);
			$this->session->set_userdata($usuarioSesion);
			redirect('inicio');
		}else{
			//No se encontraron datos
		}
	}

	public function salir(){
		$array_items = array('nombre', 'correo','imagen');
		$this->session->unset_userdata($array_items);
		$this->session->logeado = FALSE;
		$this->load->view('usuario/login');
	}
}