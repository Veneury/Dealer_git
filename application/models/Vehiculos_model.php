<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos_model extends CI_Model {
    

    public function obtener_vehiculos()
    {
        $querry= $this->db->get('cars')->result();
        return $querry;
    }


    public function obtener_un_vehiculo($id){
        $this->db->where('cars_id',$id);
        $querry=$this->db->get('cars')->result();
        return $querry;
    }


    public function obtener_marcas()
    {
        $querry=$this->db->get('brands')->result();
        return $querry;
    }
    public function obtener_modelos()
    {
        $querry=$this->db->get('models')->result();
        return $querry;
    }
    public function insertar_vehiculo($data)
    {
        $querry=$this->db->insert('cars',$data);
        return $querry;
    }

    public function actulizar_vehiculos($id,$data)
    {
        $this->db->where('cars_id',$id);
        $querry=$this->db->update('cars',$data);
        return $querry;
    }

    public function delete($id)
    {
        $this->db->where('cars_id',$id);
        $querry=$this->db->delete('cars');
    }
}
