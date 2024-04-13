<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\ProductoModel;

class ProductoAPI extends BaseController {

  use ResponseTrait;
  private $productoModel;

  function __construct() {
    $this->productoModel = new ProductoModel();
  }

  public function index() {
    $lista = $this->productoModel->findAll();

    if ($lista) {
      $datos = array(
        "data" => $lista,
        "status" => "success",
      );
    } else {
      $datos = array(
        "data" => array(),
        "status" => "error",
        "message" => "no se encontraron productos",
      );
    }

    return $this->setResponseFormat('json')->respond($datos);
  }

  public function show($id) {
    $respuesta = $this->productoModel->find($id); 

    if ($respuesta) {
      $datos = array(
        "data" => $respuesta,
        "status" => "success",
      );
    } else {
      $datos = array(
        "data" => array(),
        "status" => "error",
        "message" => "no se encontro el producto",
      );
    }

    return $this->setResponseFormat('json')->respond($datos);
  }

  public function delete($id) {
    $respuesta = $this->productoModel->delete($id);

    if ($respuesta) {
      $datos = array(
        "status" => "success",
        "message" => "producto eliminado correctamente",
      );
    } else {
      $datos = array(
        "status" => "error",
        "message" => "no se elimino el producto",
      );
    }

    return $this->setResponseFormat('json')->respond($datos);
  }
}
