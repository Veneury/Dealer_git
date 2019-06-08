<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
    }
    public function Home()
    {
        $Vehiculos = $this->Vehiculos_model->obtener_vehiculos();
        $marcas =$this->Vehiculos_model->obtener_marcas();
        $modelos=$this->Vehiculos_model->obtener_modelos();
        $this->layout->view('Home',compact('Vehiculos','marcas','modelos'));
    }

    public function insertar_vehiculo()
    {
        $config['upload_path']          = './subidas/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->do_upload('fotoUno');
            $data_upload_file=$this->upload->data();
            $image_path = $this->upload->data();

        $data =array(
            'brands_id'=>  $_POST['marcas'], 
            'models_id' => $_POST['modelo'], 
            'registration_car'=> $_POST['matricula'], 
            'color' =>$_POST['color'],
            'placa'=> $_POST['placa'], 
            'year'=> $_POST['ano'], 
            'sale_price'=> $_POST['precioVentas'], 
            'buy_price' =>$_POST['precioCompra'], 
            'picture_one'=> $image_path['file_name'], 
            'picture_two'=> $_POST[''], 
            'picture_there'=> $_POST[''], 
            'picture_four'=> $_POST[''], 
            'description'=> $_POST['descripcion']
        );
        $save = $this->Vehiculos_model->insertar_vehiculo($data);
        redirect (base_url().'Vehiculos/Home','location');
    
    }

    public function edit($id)
    {
        $marcas =$this->Vehiculos_model->obtener_marcas();
        $modelos=$this->Vehiculos_model->obtener_modelos();
        $vehiculos=$this->Vehiculos_model->obtener_un_vehiculo($id);
        $this->layout->view("Actualizar",compact('vehiculos','marcas','modelos'));
    }

    public function actualizar()
    
    {
        $data =array(
            'brands_id'=>  $_POST['marcas'], 
            'models_id' => $_POST['modelo'], 
            'registration_car'=> $_POST['matricula'], 
            'color' =>$_POST['color'],
            'placa'=> $_POST['placa'], 
            'year'=> $_POST['ano'], 
            'sale_price'=> $_POST['precioVentas'], 
            'buy_price' =>$_POST['precioCompra'], 
            'description'=> $_POST['descripcion']
        );
        $id= $_POST['id'];
        $modelo=$this->Vehiculos_model->actulizar_vehiculos($id,$data);
        redirect (base_url().'Vehiculos/Home','location');

    }
    
    public function eliminar_vehiculo($id)
    {
        $modelo=$this->Vehiculos_model->delete($id);
        redirect (base_url().'Vehiculos/Home','location');
    }

 
}
