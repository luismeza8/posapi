<?php


namespace App\models;

use CodeIgniter\Model;

class  CategoriaModel extends Model{

    protected $table = "categorias";
    protected $primaryKey ="id";

    protected  $allowedFields = array(
        "id", "nombre", "estado", "imagen"
    ); 

}
