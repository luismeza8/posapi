<?php

namespace App\models;
use CodeIgniter\Model;

class ProductoModel extends Model {
    protected $table = "productos";
    protected $primaryKey = "id";

    protected $allowedFields = array(
        "id", "nombre", "descripcion", "imagen", "precio"
    );
}
