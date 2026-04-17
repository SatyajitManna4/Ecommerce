<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    // Add your database columns here later
    protected $allowedFields = ['name', 'price', 'image'];
}