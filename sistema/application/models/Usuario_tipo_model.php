<?php

class Usuario_tipo_model extends CI_Model {
	
	public $tip_usu_nombre;
	public $tip_usu_activo;
	
	public function __construct(){
		parent::__construct();
	}

	public function crear(){

        $this->tip_usu_activo = 1;
		$this->db->insert('tipo_usuario',$this);
        $id = $this->db->insert_id();
        $error = $this->db->error();
        $error['id'] = $id;
		return $error;
	}
    
    public function actualizar($id){
        $this->db->where('tip_usu_id',$id);
		$this->db->update('tipo_usuario',$this);
        $error= $this->db->error();
        return $error;
	}

    public function eliminar($id){
        $this->db->where('tip_usu_id',$id);
        $this->db->delete('tipo_usuario');
        $error = $this->db->error();
        return $error;
        
    }
	
    public function consultar($id){

		$this->db->select('tip_usu_id,tip_usu_nombre,tip_usu_activo');
		$this->db->from('tipo_usuario');
		$this->db->where('tip_usu_id',$id);
		$datos = $this->db->get()->result();
		return $datos;
	}
	
	public function todos(){
		$this->db->select('tip_usu_id,tip_usu_nombre,tip_usu_activo');
		$this->db->from('tipo_usuario');
		$datos = $this->db->get()->result();
		return $datos;
	}

	public function todos_activos(){
		$this->db->select('tip_usu_id,tip_usu_nombre,tip_usu_activo');
		$this->db->from('tipo_usuario');
		$this->db->where('tip_usu_activo',1);
		$datos = $this->db->get()->result();
		return $datos;
	}
}