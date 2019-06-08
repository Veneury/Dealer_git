<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas extends CI_Controller {

    public function Home()
    {
    $marca=$this->Marcas_model->obtener_marcas();
    $this->layout->view('Home',compact('marca'));
    }

   
    public function insertar_marca()
    {
        $datos=array(
            'name'=>$_POST['marca']
        );
        $marcas = $this->Marcas_model->insertar_marcas($datos);
        redirect (base_url().'Marcas/Home','location');
    }

    public function edit($id)
    {
        $marcas=$this->Marcas_model->obtener_marcar($id);
        $this->layout->view('Actualizar_View',compact('marcas'));
    }

    public function actualizar()
    {
        $datos=array(
            'name'=>$_POST['marca']
        );
        $id=$_POST['id'];
        $modelo=$this->Marcas_model->actualizar_marcas($id,$datos);
        redirect(base_url().'Marcas/Home','location');
    }

    public function delete($id)
    {
        $modelo=$this->Marcas_model->eliminar_marcas($id);
        redirect(base_url().'Marcas/Home','location');
    }
}

