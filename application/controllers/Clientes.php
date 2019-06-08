<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {



public function Home()
{
    
 $Clientes= $this->Clientes_model->obtener_clientes();
  return $this->layout->view('Home',compact("Clientes"));
}

public function listado_clientes()
{
   
}
public function insertar_cliente()

{
    $data = array(
        'identity_number' => $_POST["cedula"],
        'name' => $_POST["nombre"],
        'last_name' => $_POST["apellido"],
        'sex'=>$_POST['sexo'],
        'birth_date'=>$_POST['nacimiento'], 
        'address'=>$_POST['direccion'], 
        'sector'=>$_POST['sector'], 
        'telephone'=>$_POST['telefono'], 
        'mobile'=>$_POST['celular'], 
        'email'=>$_POST['email']
);

  $modelo = $this->Clientes_model->insertar_clientes('customers',$data);
redirect(base_url().'Clientes/Home/', 'location');
}

public function edit($id)
{
    $datos=$this->Clientes_model->
    obtener_un_cliente($id);
    $this->layout->view('Actualizar_View',compact('datos'));
}

public function actualizar()
{
    $data = array(
        'identity_number' => $_POST["cedula"],
        'name' => $_POST["nombre"],
        'last_name' => $_POST["apellido"],
        'sex'=>$_POST['sexo'],
        'birth_date'=>$_POST['nacimiento'], 
        'address'=>$_POST['direccion'], 
        'sector'=>$_POST['sector'], 
        'telephone'=>$_POST['telefono'], 
        'mobile'=>$_POST['celular'], 
        'email'=>$_POST['email']
);
    $id=$_POST['id'];
    $modelo = $this->Clientes_model->actulizar_cliente($id,$data);
    redirect(base_url().'Clientes/Home/', 'location');
    
}

public function delete($id)
{
$modelo=$this->Clientes_model->eliminar_cliente($id);
redirect(base_url().'Clientes/Home/', 'location');
}


public function detalle_cliente($id)
{
    $detalles=$this->Clientes_model->obtener_un_cliente($id);
    $this->layout->view('Detalle',compact('detalles'));
}

}
