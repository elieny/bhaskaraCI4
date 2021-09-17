<?php

namespace App\Models;

use CodeIgniter\Model;

class BhaskaraModel extends Model
{
protected $table = 'bhaskara';
protected $primaryKey = 'id';

 protected $useAutoIncrement = true;

 protected $returnType = 'array';
protected $useSoftDeletes = false;

 protected $allowedFields = ['a', 'b', 'c', 'delta','x1','x2'];

}