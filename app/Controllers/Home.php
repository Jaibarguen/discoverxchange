<?php

namespace App\Controllers;

use App\Models\usuario;
use App\Models\contacto;
use App\Models\productos;

class Home extends BaseController
{
    public $session;
    public $resultado;
    //funcion de inicializacion
    //se ejecuta antes de llamar al metodo de la ruta
    public function __construct()
    {
        $this->session = \Config\Services::session(); 
    }

    public function index()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $pModel = model('productos');
        
        return view('index', ['producto' => $pModel->findAll()]);
    }else{
        $pModel = model('productos');
        
        return view('index', ['producto' => $pModel->findAll()]);
    }
        
    }

    
    public function registro()
    {
        return view('registrar');
    }
    public function log()
    {
        return view('login');
    }
    public function contact()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $this->session->setFlashdata('nosoporte',true);
        return $this->response->redirect(base_url('login'));
    }else{
        return view('contact');
    }
    }
    public function shop()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $pModel = model('productos');
        return view('shop', ['producto' => $pModel->findAll()]);
    }else{        
        $pModel = model('productos');
        return view('shop', ['producto' => $pModel->findAll()]);
    }
    }
    public function detail()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $this->session->setFlashdata('nocompra',true);
        return $this->response->redirect(base_url('login'));
    }else{
        $session = session();
        if($session->has('detail')){
        $data['detail'] = array_values(session('detail'));
        $pModel = model('productos');
        return view('detail', ['producto' => $pModel->findAll()] + $data);
        }else{
            $pModel = model('productos');
        return view('detail', ['producto' => $pModel->findAll()]);
        }
    } 
    }


    public function details($id = null)
    {
        $session = session();
        $session->remove('detail');
        $productModel = New productos();
        $product = $productModel->find($id);
        $item = array(
            'idproducto' => $product['idproducto'],
            'nombre' => $product['nombre'],
            'precio' => $product['precio'],
            'imagen' => $product['imagen'],
            'stock' => $product['stock'],
            'informacion' => $product['informacion'],
            'descripcion' => $product['descripcion'],
            'tipo' => $product['tipo'],
            'infovendedor' => $product['infovendedor'],
            'vendedorid' => $product['vendedorid']
        );
        $session = session();
        if($session->has('detail')){
            $detail = array_values(session('detail'));
            $session->set('detail', $detail);
        }else {
            $detail = array($item);
            $session->set('detail', $detail);
        }

        
        return $this->response->redirect(base_url('detalles'));
    
    }

    public function electric()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $pModel = model('productos');
        return view('electric', ['producto' => $pModel->findAll()]);
    }else{
        
        $pModel = model('productos');
        return view('electric', ['producto' => $pModel->findAll()]);
    }
    }

    public function shome()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $pModel = model('productos');
        return view('shome', ['producto' => $pModel->findAll()]);
    }else{
        
        $pModel = model('productos');
        return view('shome', ['producto' => $pModel->findAll()]);
    }
    }

    public function sropa()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $pModel = model('productos');
        return view('sropa', ['producto' => $pModel->findAll()]);
    }else{
        
        $pModel = model('productos');
        return view('sropa', ['producto' => $pModel->findAll()]);
    }
    }

    public function saseo()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $pModel = model('productos');
        return view('saseo', ['producto' => $pModel->findAll()]);
    }else{
        
        $pModel = model('productos');
        return view('saseo', ['producto' => $pModel->findAll()]);
    }
    }

    public function payment(): string
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $this->session->setFlashdata('nocompra',true);
        return view('login');
    }else{
        
        $session = session();
        if($session->has('cart')){
        $data['items'] = array_values(session('cart'));
        $data['total'] = $this->total();
        
        return view('checkout', $data);
        }else{
            return view('checkout');
        }
    }
    }



    public function pay()
    {
        $session = session();
        if($session->has('cart')){
            $model = model('ventas');
        $dato['items'] = array_values(session('cart'));
        $dato['total'] = $this->total();
        $request = \Config\Services::request();
        foreach($dato['items'] as $item){
            $resultado = $model;
            $op = $this->request->getPost('pais');
            if($op == 0){
                $op3 = $this->request->getPost('paypal');
                $op2 = $this->request->getPost('directcheck');
                $op1 = $this->request->getPost('banktransfer');
                if($op3 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Estados unidos",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"paypal",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }else if($op2 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Estados unidos",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"directcheck",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }else if($op1 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Estados unidos",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"banktransfer",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }
            }else if($op == 1){
                $op3 = $this->request->getPost('paypal');
                $op2 = $this->request->getPost('directcheck');
                $op1 = $this->request->getPost('banktransfer');
                if($op3 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Afghanistan",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"paypal",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }else if($op2 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Afghanistan",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"directcheck",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }else if($op1 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Afghanistan",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"banktransfer",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }
            }else if($op == 2){
                $op3 = $this->request->getPost('paypal');
                $op2 = $this->request->getPost('directcheck');
                $op1 = $this->request->getPost('banktransfer');
                if($op3 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Colombia",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"paypal",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }else if($op2 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Colombia",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"directcheck",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }else if($op1 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Colombia",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"banktransfer",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }


                
            }else if($op == 3){
                $op3 = $this->request->getPost('paypal');
                $op2 = $this->request->getPost('directcheck');
                $op1 = $this->request->getPost('banktransfer');
                if($op3 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Alemania",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"paypal",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }else if($op2 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Alemania",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"directcheck",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }else if($op1 == "on"){
                    $data2 = [
                        "idfactura"=>$request->getPost('idfactura'),
                        "cliente"=>$_SESSION['nombre'],
                        "usuario"=>$_SESSION['usuario'],
                        "correo"=>$_SESSION['correo'],
                        "telefono"=>$_SESSION['telefono'],
                        "Dl1"=>$request->getPost('di1'),
                        "Dl2"=>$request->getPost('di2'),
                        "pais"=>"Alemania",
                        "ciudad"=>$request->getPost('ciu'),
                        "departamento"=>$request->getPost('dep'),
                        "cpostal"=>$request->getPost('cpo'),
                        "mpago"=>"banktransfer",
                        "productos"=> $item['nombre'],
                        "precio" => $item['precio'],
                        "cantidad" => $item['stock'],
                        "total" => $item['precio'] * $item['stock'],
                        "idproductos" => $item['idproducto'],
                ]; $resultado = $model->insert($data2);
                }
            }
            }if($resultado){
                $session = session();
                $session->remove('cart');
                return $this->response->redirect(base_url('/'));
            }
        }else{
            echo "error";
        }
    }



    public function registrar_usuario(){
        //$pwd =  password_hash(strval($this->request->getPost('pa')), PASSWORD_DEFAULT);
        $model = model('usuario');
        $request = \Config\Services::request();
       $data =  ["nombre"=>$request->getPost('na'),
        "apellido"=>$request->getPost('ap'),
        "cedula" => $request->getPost('iden'),
        "telefono"=>$request->getPost('tel'),
        "usuario"=>$request->getPost('usu'),
        "correo"=>$request->getPost('co'),
        "password" => password_hash(strval($this->request->getPost('pa')), PASSWORD_DEFAULT),
        $pwd = $this->request->getPost('pa'),
        $cpwd = $this->request->getPost('cpa'),
    ];

    $resultado = $model ->getWhere([
        'cedula' => $this->request->getPost("iden")
    ]);
    if($resultado->getResult()){
        $this->session->setFlashdata('error',true);

        if($resultado->getResult()){
            $this->session->setFlashdata('error1',true);
            $resultado = $model ->getWhere([
                'correo' => $this->request->getPost("co")
            ]);
            if($resultado->getResult()){
                $this->session->setFlashdata('error2',true);
                $resultado = $model ->getWhere([
                    'telefono' => $this->request->getPost("tel")
                ]);
                if($resultado->getResult()){
                    $this->session->setFlashdata('error3',true);
                    if($pwd == $cpwd){
                        $this->session->setFlashdata('error4',false);
                        return view('registrar');
                    }else{
                        $this->session->setFlashdata('error4',true);
                        return view('registrar');
                    }  
                }else{
                    $this->session->setFlashdata('error3',false);
                    if($pwd == $cpwd){
                        $this->session->setFlashdata('error4',false);
                        return view('registrar');
                    }else{
                        $this->session->setFlashdata('error4',true);
                        return view('registrar');
                    }
                }
            }
        }
        
    }else{
        $this->session->setFlashdata('error',false);
        $resultado = $model ->getWhere([
            'usuario' => $this->request->getPost("usu")
        ]);
        if($resultado->getResult()){
            $this->session->setFlashdata('error1',true);
            $resultado = $model ->getWhere([
                'correo' => $this->request->getPost("co")
            ]);
            if($resultado->getResult()){
                $this->session->setFlashdata('error2',true);
                $resultado = $model ->getWhere([
                    'telefono' => $this->request->getPost("tel")
                ]);
                if($resultado->getResult()){
                    $this->session->setFlashdata('error3',true);
                    if($pwd == $cpwd){
                        $this->session->setFlashdata('error4',false);
                        return view('registrar');
                    }else{
                        $this->session->setFlashdata('error4',true);
                        return view('registrar');
                    }  
                }else{
                    $this->session->setFlashdata('error3',false);
                    if($pwd == $cpwd){
                        $this->session->setFlashdata('error4',false);
                        return view('registrar');
                    }else{
                        $this->session->setFlashdata('error4',true);
                        return view('registrar');
                    }
                }
            }else{
                $this->session->setFlashdata('error2',false);
                $resultado = $model ->getWhere([
                    'telefono' => $this->request->getPost("tel")
                ]);
                if($resultado->getResult()){
                    $this->session->setFlashdata('error3',true);
                    if($pwd == $cpwd){
                        $this->session->setFlashdata('error4',false);
                        return view('registrar');
                    }else{
                        $this->session->setFlashdata('error4',true);
                        return view('registrar');
                    }  
                }else{
                    $this->session->setFlashdata('error3',false);
                    if($pwd == $cpwd){
                        $this->session->setFlashdata('error4',false);
                        return view('registrar');
                    }else{
                        $this->session->setFlashdata('error4',true);
                        return view('registrar');
                    }
                }
            }
        }else{
            $this->session->setFlashdata('error1',false);
            $resultado = $model ->getWhere([
                'correo' => $this->request->getPost("co")
            ]);
            if($resultado->getResult()){
                $this->session->setFlashdata('error2',true);
                $resultado = $model ->getWhere([
                    'telefono' => $this->request->getPost("tel")
                ]);
                if($resultado->getResult()){
                    $this->session->setFlashdata('error3',true);
                    if($pwd == $cpwd){
                        $this->session->setFlashdata('error4',false);
                        return view('registrar');
                    }else{
                        $this->session->setFlashdata('error4',true);
                        return view('registrar');
                    }
                }else{
                    $this->session->setFlashdata('error3',false);
                    if($pwd == $cpwd){
                        $this->session->setFlashdata('error4',false);
                        return view('registrar');
                    }else{
                        $this->session->setFlashdata('error4',true);
                        return view('registrar');
                    }
                }
            }else{
                $this->session->setFlashdata('error2',false);
                $resultado = $model ->getWhere([
                    'telefono' => $this->request->getPost("tel")
                ]);
                if($resultado->getResult()){
                    $this->session->setFlashdata('error3',true);
                    return view('registrar');  
                }else{
                    $this->session->setFlashdata('error',false);
                    $this->session->setFlashdata('error1',false);
                    $this->session->setFlashdata('error2',false);
                    $this->session->setFlashdata('error3',false);

                    if($pwd == $cpwd){
                        $this->session->setFlashdata('error4',false);
                        $resultado = $model->insert($data);
                    $data = [
                        'id' => $resultado,
                        'nombre' => $request->getPost('na'),
                        'apellido' => $request->getPost('ap'),
                        'usuario' => $request->getPost('usu'),
                        'cedula' => $request->getPost('iden'),
                        'telefono' =>$request->getPost('tel'),
                        'correo' =>$request->getPost('co'),
                    ];
                    $this->session->set($data);
                    return view('index');
                    }else{
                        $this->session->setFlashdata('error4',true);
                        return view('registrar');
                    }
                }
            }
        }
    }
    }



    public function start(){
        $model = model('usuario');
        $resultado = $model ->getWhere([
            'usuario' => $this->request->getPost("usu")
        ]);
        $usuario = $resultado->getRow();
        if($usuario){
            if(password_verify(strval($this->request->getPost("pa")), $usuario->password)){
                
                $data = [
                    'id' => $usuario->idpersona,
                    'nombre' => $usuario->nombre,
                    'apellido' => $usuario->apellido,
                    'usuario' => $usuario->usuario,
                    'cedula' => $usuario->cedula,
                    'telefono' => $usuario->telefono,
                    'correo' => $usuario->correo,
                ];
                $this->session->set($data);
                $this->session->set('login',true);
                return $this->response->redirect(base_url('/'));
            }else{
            $this->session->setFlashdata('errorlogin',true);
            return $this->response->redirect(base_url('login'));
            }
        }else{
            $this->session->setFlashdata('errorlogin',true);
            return $this->response->redirect(base_url('login'));
        };
    }



    public function salir()
    {
        $session = session();
        
        $session->destroy();
        return $this->response->redirect(base_url('/'));
    }

    

    public function soporte()
    {
        $nombre = $this->request->getPost("No");
        $email = $this->request->getPost("Em");
        $problema = $this->request->getPost("Pr");
        $descripcion = $this->request->getPost("De");

        $soporteModel = model('contacto');
        $data = array(
            "nombre" => $nombre,
            "email" => $email,
            "problema" => $problema,
            "descripcion" => $descripcion
        );
        $resultado = $soporteModel->insert($data);
        if($resultado){
            return view('contact');
        }
    }

    public function select()
    {
        if(!(isset($_SESSION['usuario'])))
        {
        $this->session->setFlashdata('noproducto',true);
        return $this->response->redirect(base_url('login'));
        }else{
            
            $this->session->setFlashdata('venta',true);

            return view('product');
        }
    }

    public function tipo()
    {
        if(!(isset($_SESSION['usuario'])))
        {
        $this->session->setFlashdata('noproducto',true);
        return $this->response->redirect(base_url('login'));
        }else{
            $request = \Config\Services::request();
            $op = $this->request->getPost("tipo");
            if($op == 0){
                $this->session->setFlashdata('venta',false);
                return view('product');
            }else if($op == 1){
                $this->session->setFlashdata('venta',true);
                $data = [
                    'producto' => $request->getPost("na"),
                    'precio' => $request->getPost("pre"),
                    'tipo' => "Electronico",
                ];
                $this->session->set($data);
                return view('add');
            }else if($op == 2){
                $this->session->setFlashdata('venta',true);
                $data = [
                    'producto' => $request->getPost("na"),
                    'precio' => $request->getPost("pre"),
                    'tipo' => "Hogar",
                ];
                $this->session->set($data);
                return view('add');
            }else if($op == 3){
                $this->session->setFlashdata('venta',true);
                $this->session->setFlashdata('ropa',true);
                $data = [
                    'producto' => $request->getPost("na"),
                    'precio' => $request->getPost("pre"),
                    'tipo' => "Ropa",
                ];
                $this->session->set($data);
                return view('add');
            }else if($op == 4){
                $this->session->setFlashdata('venta',true);
                $data = [
                    'producto' => $request->getPost("na"),
                    'precio' => $request->getPost("pre"),
                    'tipo' => "Aseo",
                ];
                $this->session->set($data);
                return view('add');
            }
        }
    }

    public function agregar()
    {
        if(!(isset($_SESSION['usuario'])))
        {
        $this->session->setFlashdata('noproducto',true);
        return $this->response->redirect(base_url('login'));
        }else{
            
            $nombre = $_SESSION['producto'];
            $precio = $_SESSION['precio'];
            $op = $_SESSION['tipo'];
            $imagen = $this->request->getPost("im");
            $stock = $this->request->getPost("ca");
            $informacion = $this->request->getPost("in");
            $descripcion = $this->request->getPost("de");
            $vendedorif = $_SESSION['usuario'];
            $vendedor = $_SESSION['cedula'];
            if($stock > 100){
                $this->session->setFlashdata('stock', true);
                return view('add');

            }else{
                $proModel = model('productos');

                $data = array(
                    "nombre" => $nombre,
                    "precio" => $precio,
                    "imagen" => $imagen,
                    "stock" => $stock,
                    "informacion" => $informacion,
                    "descripcion" => $descripcion,
                    "tipo" => $op,
                    "infovendedor" => $vendedorif,
                    "vendedorid" => $vendedor,
                );
                $resultado = $proModel->insert($data);
                if($resultado){
                    return $this->response->redirect(base_url('/'));
                }
            }
            
        }
    }






    public function cart()
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $this->session->setFlashdata('nocompra',true);
        return $this->response->redirect(base_url('login'));
    }else{
        $session = session();
        if($session->has('cart')){
        $data['items'] = array_values(session('cart'));
        $data['total'] = $this->total();
        
        return view('cart', $data);
        }else{
            return view('cart');
        }
    } 
    }

    public function buy($id = null)
    {
        if(!(isset($_SESSION['usuario'])))
    {
        $this->session->setFlashdata('nocompra',true);
        return $this->response->redirect(base_url('login'));
    }else{
        $productModel = New productos();
        $product = $productModel->find($id);
        $item = array(
            'idproducto' => $product['idproducto'],
            'nombre' => $product['nombre'],
            'precio' => $product['precio'],
            'imagen' => $product['imagen'],
            'stock' => 1,
            'informacion' => $product['informacion'],
            'descripcion' => $product['descripcion'],
            'tipo' => $product['tipo'],
            'infovendedor' => $product['infovendedor'],
            'vendedorid' => $product['vendedorid']
        );
        $session = session();
        if($session->has('cart')){
            $index = $this->exists($id);
            $cart = array_values(session('cart'));
            if($index == -1){
                array_push($cart, $item);
            }else{
                $cart[$index]['stock']++;
            }
            $session->set('cart', $cart);
        }else {
            $cart = array($item);
            $session->set('cart', $cart);
        }
        
        return $this->response->redirect(base_url('carrito'));
    }
    }



    private function exists($id){
        $items = array_values(session('cart'));
        for($i = 0; $i < count($items); $i++){
            if($items[$i]['idproducto'] == $id){
                return $i;
            }
        }
        return -1;
    }

    public function remove($id = null){
        $index = $this->exists($id);
        $cart = array_values(session('cart'));
        unset($cart[$index]);
        $session = session();
        $session->set('cart', $cart);
        return $this->response->redirect(base_url('carrito'));
    }

    public function update($id = null){
        $cart = array_values(session('cart'));
        for($i = 0; $i < count($cart); $i++){
            $cart[$i]['stock'] = $_POST['stock'][$i];
        }
        $session = session();
        $session->set('cart',$cart);
        return $this->response->redirect(base_url('carrito'));
    }

    private function total(){
        $s = 0;
        $items = array_values(session('cart'));
        foreach($items as $item){
            $s += $item['precio'] * $item['stock'];
        }
        return $s;
    }




}
