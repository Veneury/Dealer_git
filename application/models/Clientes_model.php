<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model{


public function obtener_clientes()
{
   $query= $this->db->get('customers')->result();
   return $query;
}
public function obtener_un_cliente($id)
{
    $this->db->where('customers_id', $id);
    $query=$this->db->get('customers')->result();
    return $query;

}

public function insertar_clientes($table,$datos)
{
$this->db->insert($table, $datos);
}

public function actulizar_cliente($id,$data)
{
    $this->db->where('customers_id', $id);
    $query=$this->db->update('customers', $data);
    return $query;
}

public function eliminar_cliente($id)
{
    $this->db->where('customers_id', $id);
    $query=$this->db->delete('customers');
}




}
