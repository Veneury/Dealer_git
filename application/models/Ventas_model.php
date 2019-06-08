<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

    public function obtener_una_venta($id)
    {
        $this->db->where('sale_id',$id);
        $querry=$this->db->get('sales')->result();
        return $querry;
    }

    public function consulta_avanzada()
    {
    $this->db->select('*');    
    $this->db->from('sales');
    $this->db->join('customers', 'sales.id_customers = customers.customers_id');
    $this->db->join('employes', 'sales.id_employes = employes.employes_id');
    $this->db->join('cars', 'sales.card_id = cars.cars_id');

    $query = $this->db->get()->result();
    return $query;

    }

    public function detalle_ventas($id)
    {
    $this->db->where('sale_id',$id);
    $this->db->select('*');    
    $this->db->from('sales');
    $this->db->join('customers', 'sales.id_customers = customers.customers_id');
    $this->db->join('employes', 'sales.id_employes = employes.employes_id');
    $this->db->join('cars', 'sales.card_id = cars.cars_id');

    $query = $this->db->get()->result();
    return $query;

    }

    public function obtener_empledos()
    {
        $query=$this->db->get('employes')->result();
        return $query;
    }
    public function obtener_cliente()
    {
        $query=$this->db->get('customers')->result();
        return $query;
    }
    public function obtener_carros()
    {
        $query=$this->db->get('cars')->result();
        return $query;
    }

   public function insertar_ventas($datos)
   {
    $query=$this->db->insert('sales',$datos);
    return $query;
   }

   public function modicarempleados($id)
    {
        $this->db->where('sale_id',$id);
        $query=$this->db->get('sales')->result();
        return $query;
    }

    public function eliminar_ventas($id)
    {
        $this->db->where('sale_id',$id);
        $query=$this->db->delete('sales');

    }
}
