<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados_model extends CI_Model{

    public function insertar_empleados($table,$datos)
    {
       $query= $this->db->insert($table,$datos);
       return $query;
    }
    public function obtener_empleados()
    {
        $query = $this->db->get('employes')->result();
        return $query;
    }
    public function obtener_un_empleados($id)
    {
        $this->db->where('employes_id',$id);
        $query=$this->db->get('employes')->result();
        return $query;
    }
    public function actualizar_empleado($id,$datos)
    {
        $this->db->where('employes_id',$id);
        $query=$this->db->update('employes',$datos);
        return $query;
    }
    public function eliminar_empleado($id)
    {
        $this->db->where('employes_id',$id);
        $query = $this->db->delete('employes');

    }


}