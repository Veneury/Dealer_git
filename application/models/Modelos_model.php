<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos_model extends CI_Model{

    public function obtener_empleados()
    {
        $query=$this->db->get('models')->result();
        return $query;
    }

    public function insertar_modelos($data)
    {
        $query=$this->db->insert('models',$data);
        return $query;
    }

    public function obtener_un_empleado($id){
        $this->db->where('models_id',$id);
        $query=$this->db->get('models')->result();
        return $query;
    }

    public function actualizar_modelos($id,$datos)
    {
        $this->db->where('models_id',$id);
        $query=$this->db->update('models',$datos);
        return $query;
    }
    public function eliminar_empleados($id)
    {
        $this->db->where('models_id',$id);
        $query=$this->db->delete('models');
    }
}

