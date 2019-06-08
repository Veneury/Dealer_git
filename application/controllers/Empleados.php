<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

public function Home()
{
    $empleados=$this->Empleados_model->obtener_empleados();
    $this->layout->view('Home',compact('empleados'));
}

public function insertar_empleado()
{
    $datos =array(
        
        'identity_number' => $_POST["cedula"],
        'naname_employesme' => $_POST["nombre"],
        'last_nameemplyes' => $_POST["apellido"],
        'sex'=>$_POST['sexo'],
        'birth_date'=>$_POST['nacimiento'], 
        'address'=>$_POST['direccion'], 
        'sector'=>$_POST['sector'], 
        'telephone'=>$_POST['telefono'], 
        'mobile'=>$_POST['celular'], 
        'email'=>$_POST['email']
    );
    $empleado=$this->Empleados_model->insertar_empleados('employes',$datos);
    redirect(base_url().'Empleados/Home/', 'location');

}

public function edit($id)
{
$datos=$this->Empleados_model->obtener_un_empleados($id);
$this->layout->view('Actualizar_View',compact('datos'));
}

public function actualizar()
{
    $datos =array(
        'identity_number' => $_POST["cedula"],
        'naname_employesme' => $_POST["nombre"],
        'last_nameemplyes' => $_POST["apellido"],
        'sex'=>$_POST['sexo'],
        'birth_date'=>$_POST['nacimiento'], 
        'address'=>$_POST['direccion'], 
        'sector'=>$_POST['sector'], 
        'telephone'=>$_POST['telefono'], 
        'mobile'=>$_POST['celular'], 
        'email'=>$_POST['email']
    );
    $id=$_POST['id'];
    $modelo=$this->Empleados_model->actualizar_empleado($id,$datos);
    redirect(base_url().'Empleados/Home/', 'location');

}

public function delete($id)
{
    $modelo=$this->Empleados_model->eliminar_empleado($id);
    redirect(base_url().'Empleados/Home/', 'location');

}

public function detalle_empleados($id)
{
    $detalles=$this->Empleados_model->obtener_un_empleados($id);
    $this->layout->view('Detalle',compact('detalles'));
}

}