<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos extends CI_Controller {

    public function Home(){
        $modelos=$this->Modelos_model->obtener_empleados();
        $this->layout->view('Home',compact('modelos'));
    }

    public function insertar_modelo()
    {
        $data = array(
            'name' => $_POST['modelo']
        );
        $this->Modelos_model->insertar_modelos($data);
        redirect (base_url().'Modelos/Home','location');
    }

    public function edit($id)
    {
        $modelos=$this->Modelos_model->obtener_un_empleado($id);
        $this->layout->view('Actualizar_View',compact('modelos'));
    }

    public function actualizar()
    {
        $datos = array(
            'name'=>$_POST['modelo']
        );
        $id=$_POST['id'];
        $modelo= $this->Modelos_model->actualizar_modelos($id,$datos);
        redirect (base_url().'Modelos/Home','location');

    }

    public function delete($id)
    {
        $modelo=$this->Modelos_model->eliminar_empleados($id);
        redirect (base_url().'Modelos/Home','location');

    }

}
