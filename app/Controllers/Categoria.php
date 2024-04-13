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

        return view('categorias/categorias', $datos);
    }

    public function create() {
        return view("categorias/categorias_create");
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
            return redirect()->to("/categoria");
        } else {
            return redirect()->to("/create?error=Error al crear la categoria");
        }
    }

    public function delete($id) {
        $categoriaModel = new CategoriaModel();

        $categoriaModel->delete($id);

        return redirect()->to("/categoria");
    }

    public function edit($id) {
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->find($id);

        $data = array(
            "categoria" => $categoria
        );    
        
        return view("/categorias/categorias_edit", $data);
    }
        public function update($id){
            $categoriaModel = new CategoriaModel(); 

            $datos = array( 
                "nombre" => $this->request->getVar("nombre"),
                "estado" =>$this->request->getVar("estado"),
                "imagen" => $this->request->getVar("imagen"),
            );

            $resultado = $categoriaModel->update($id,$datos);

            if($resultado){
                return redirect()->to("/categoria");
            }else{
                return redirect()->to("/create?error=Error al crear la categoria");
            }
        }
} 
