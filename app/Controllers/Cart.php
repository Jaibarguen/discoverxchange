<?php

namespace App\Controllers;

use App\Models\usuario;
use App\Models\contacto;
use App\Models\productos;

class Cart extends BaseController
{
    public $session;
    public $resultado;

    public function __construct()
    {
        $this->session = \Config\Services::session(); 
    }

    public function index()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $this->session->setFlashdata('nocompra',true);
        return $this->response->redirect(base_url('login'));
    }else{
        $data['items'] = array_values(session('cart'));
        
        return view('cart', $data);
    } 
    }

    public function buy($idproducto)
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $this->session->setFlashdata('nocompra',true);
        return $this->response->redirect(base_url('login'));
    }else{
        $productModel = New productos();
        $product = $productModel->find($idproducto);
        $item = array(
            'idproducto' => $product['idproducto'],
            'nombre' => $product['nombre'],
            'precio' => $product['precio'],
            'imagen' => $product['imagen'],
            'informacion' => $product['informacion'],
            'descripcion' => $product['descripcion'],
            'tipo' => $product['tipo'],
            'infovendedor' => $product['infovendedor'],
            'vendedorid' => $product['vendedorid']
        );
        $session = session();
        if($session->has('cart')){

        }else {
            $cart = array($item);
            $session->set('cart', $cart);
        }
        
        return $this->response->redirect(base_url('cart'));
    }
    }

}