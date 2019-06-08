<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

    public function Home()
    {
        $ventas=$this->Ventas_model->consulta_avanzada();
        $empleados=$this->Ventas_model->obtener_empledos();
        $clientes=$this->Ventas_model->obtener_cliente();
        $carros=$this->Ventas_model->obtener_carros();
            //echo json_encode($modselo);
        $this->layout->view('Home',compact('ventas','empleados','clientes','carros'));

    }

   
    public function insertar_ventas()
    {
        $itebis = $_POST['precio'] * 0.18;
        $sub_total=$_POST['precio'];
        $total=$itebis+$sub_total;
        $decuento=($total * $_POST['descuento']) / 100; 
        $datos=array(
              'id_customers'=>$_POST['cliente'],
             'id_employes'=> $_POST['empleado'], 
             'card_id'=> $_POST['carro'], 
             'sale_date'=> $_POST['fecha_venta'], 
             'type_pay'=> $_POST['tipopago'], 

             'itebis'=> $itebis, 
             'sub_total'=> $sub_total, 
             'discount'=> $decuento, 
             'total'=> $total
        );

        $datos=$this->Ventas_model->insertar_ventas($datos);
        redirect (base_url().'Ventas/Home','location');
            
    }

    public function delete($id)
    {
        $delete =$this->Ventas_model->eliminar_ventas($id);
        redirect (base_url().'Ventas/Home','location');
    }


public function detalle_venta($id){

    $detalles=$this->Ventas_model->detalle_ventas($id);
    $this->layout->view('Detalle',compact('detalles'));
}


    //Para la siguiente actualizacion del sistema
    /*public function edit($id)
    {
        $ventas=$this->Ventas_model->modicarempleados($id);
        $empleados=$this->Ventas_model->obtener_empledos();
        $clientes=$this->Ventas_model->obtener_cliente();
        $carros=$this->Ventas_model->obtener_carros();
        $this->layout->view('Actualizar',compact('ventas','empleados','clientes','carros'));
    }*/
   

}


