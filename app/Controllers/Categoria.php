<?php

namespace App\Controllers;
use App\Models\CategoriaModel;

class Categoria extends BaseController {

    public function index() {
        $categoriaModel = new CategoriaModel();
        
        $categorias = $categoriaModel -> findAll();

        $datos = array(
            "categorias" => $categorias
        );

        return view('categorias', $datos);
    }

    public function create() {
        return view("productos/Create");
    }

    public function store() {
        $categoriaModel = new CategoriaModel();

        $datos = [
            "nombre" => $this->request->getVar("nombre"),
            "estado" => $this->request->getVar("estado"),
            "imagen" => $this->request->getVar("imagen"),
        ];

        $resultado = $categoriaModel ->insert($datos);
        print_r($resultado);
        
        if($resultado) {
            return redirect()->to("/producto");
        } else {
            return redirect()->to("/create?error=Error al crear el producto");
        }
    }

    public function delete($id) {
        $productoModel = new ProductoModel();

        $productoModel->delete($id);

        return redirect()->to("/producto");
    }

    public function edit($id) {
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);

        $data = array(
            "producto" => $producto
        );    
        
        return view("/productos/edit", $data);
    }
} 
