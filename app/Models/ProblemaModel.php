<?php

namespace App\Models;

use CodeIgniter\Model;

class ProblemaModel extends Model
{
    protected $table = 'RespostasAlunos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_ambiente', 'problema', 'descricao'];
    protected $returnType = 'object';
}
