<?php

namespace App\Models;

use CodeIgniter\Model;

class usuario extends Model
{
    protected $table      = 'persona';
    protected $primaryKey = 'idpersona';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'apellido', 'cedula', 'telefono', 'usuario', 'correo', 'password'];
    
}
