<?php

namespace App\Models;

use CodeIgniter\Model;

class productos extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'idproducto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nombre', 'precio', 'imagen', 'stock', 'informacion', 'descripcion', 'tipo', 'infovendedor', 'vendedorid'];
    
}
