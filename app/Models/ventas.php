<?php

namespace App\Models;

use CodeIgniter\Model;

class ventas extends Model
{
    protected $table      = 'ventas';
    protected $primaryKey = 'idventa';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idfactura','cliente', 'usuario', 'correo', 'telefono', 'Dl1', 'Dl2',
    'pais', 'ciudad', 'departamento', 'cpostal', 'mpago', 'productos', 'precio', 'cantidad', 'total','idproductos'];
    
}
