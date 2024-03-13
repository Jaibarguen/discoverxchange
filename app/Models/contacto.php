<?php

namespace App\Models;

use CodeIgniter\Model;

class contacto extends Model
{
    protected $table      = 'contactos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'email', 'problema', 'descripcion'];
    
}
