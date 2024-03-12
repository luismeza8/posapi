<?php


namespace App\models;

use CodeIgniter\Model;

class  ProductoModel  extends Model{

    protected $table = "categorias";
    protected $primaryKey ="id";

    protected  $allowedFields = array(
        "id", "nombre","estado", "imagen"
    ); 

}