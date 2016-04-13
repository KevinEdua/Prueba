<?php

class Usuario_model extends CI_Model {
	
	public $usu_nombre;
	public $usu_correo;
	public $usu_tipo_id;
	public $usu_contrasena;
	public $usu_imagen;
	public $usu_activo;
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('security');
	}
	
	public function crear(){
		$this->usu_activo = 1;		
		$ejecutado = $this->db->insert('usuario',$this);		
		return $ejecutado;
	}
	
	public function consultar(){
		$this->db->select('usu_nombre,usu_imagen,usu_correo,tip_usu_nombre');
		$this->db->from('usuario');
		$this->db->join('tipo_usuario','usu_tipo_id = tip_usu_id','inner');
		$this->db->where('usu_correo', $this->usu_correo);
		$this->db->where('usu_contrasena', do_hash($this->usu_contrasena,'MD5'));
		//$sql = $this->db->get_compiled_select();
		$datos = $this->db->get()->result();
		return $datos;
	}
	
	public function todos(){
		$this->db->select('usu_nombre,usu_correo,usu_activo');
		$this->db->from('usuario');
		//$sql = $this->db->get_compiled_select();
		$datos = $this->db->get()->result();
		return $datos;
	}
}