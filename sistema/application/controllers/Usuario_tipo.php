<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_tipo extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('Usuario_tipo_model','usuario_tipo');
		
	}

	public function index(){
		if($this->session->logeado){            
            $data['tipos']= $this->usuario_tipo->todos();
            $this->load->view('Usuario_tipo/listado',$data);        	
		}else{
			redirect('login');
		}
	}

	public function nuevo(){
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        if ($this->form_validation->run() == TRUE){
            
            $this->usuario_tipo->tip_usu_nombre = $this->input->post('nombre');
            $ejecutado = $this->usuario_tipo->crear();
            printf(json_encode($ejecutado));
        }else{
            redirect('catalogos/usuarios/tipos');
        }
	}

	public function editar(){
        
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('activo', 'Activo', 'required');
        if ($this->form_validation->run() == TRUE){
            
            $id = $this->input->post('id');
            $this->usuario_tipo->tip_usu_nombre = $this->input->post('nombre');
            $this->usuario_tipo->tip_usu_activo = $this->input->post('activo');
            $ejecutado = $this->usuario_tipo->actualizar($id);
            printf(json_encode($ejecutado));
        }else{
            redirect('catalogos/usuarios/tipos');
        }
		
	}

    public function eliminar(){
        
        $this->form_validation->set_rules('id','ID','required');
        if($this->form_validation->run() == TRUE){
            
            $id = $this->input->post('id');
            $ejecutado = $this->usuario_tipo->eliminar($id);
            printf(json_encode($ejecutado));
        }
        else{
            redirect('catalogos/usuarios/tipos');
        }
    }
    
	public function consultar_tipo(){
		
		$this->form_validation->set_rules('id', 'ID', 'required');
		if ($this->form_validation->run() == TRUE){
			$datos = $this->usuario_tipo->consultar($this->input->post('id'));
			echo json_encode($datos);
		}
	}
}