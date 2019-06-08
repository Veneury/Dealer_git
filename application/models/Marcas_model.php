<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas_model extends CI_Model {

    public function obtener_marcas()
    {
        $query=$this->db->get('brands')->result();
        return $query;
    }

    public function obtener_marcar($id)
    {
        $this->db->where('brands_id',$id);
        $query=$this->db->get('brands')->result();
        return $query;
    }
    public function insertar_marcas($datos)
    {
        $query=$this->db->insert('brands',$datos);
        return $query;
    }
    public function actualizar_marcas($id,$datos)
    {
        $this->db->where('brands_id',$id);
        $query=$this->db->update('brands',$datos);
        return $query;
    }
    public function eliminar_marcas($id)
    {
        $this->db->where('brands_id',$id);
        $query=$this->db->delete('brands');
    }

}