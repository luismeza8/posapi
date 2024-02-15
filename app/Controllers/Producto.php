<?php

namespace App\Controllers;
use App\Models\ProductoModel;

class Producto extends BaseController {

    public function index() {
        $productoModel = new ProductoModel();
        
        $productos = $productoModel -> findAll();

        $datos = array(
            "productos" => $productos
        );

        return view('productos', $datos);
    }

    public function index2($indice) {
        $datos = [
            [
                "titulo" => "iphone",
                "descripcion" => "modelo de 256GB",
                "precio" => 1200,
                "imagen" => "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-card-40-iphone15prohero-202309_FMT_WHH?wid=508&hei=472&fmt=p-jpg&qlt=95&.v=1693086369818"
            ],
            [
                "titulo" => "samsung",
                "descripcion" => "modelo de 128GB",
                "precio" => 999,
                "imagen" => "https://www.rollingstone.com/wp-content/uploads/2020/10/f75bf25a-4f11-4921-a353-4a0db1233dbf.__CR0251464600_PT0_SX1464_V1___-e1602100192407.jpg?w=995"
            ],
            [
                "titulo" => "huawei",
                "descripcion" => "la mejor camara",
                "precio" => 800,
                "imagen" => "https://consumer.huawei.com/content/dam/huawei-cbg-site/latam/latin/mkt/plp/phones/new/kv/kv-p60-pro.jpg"
            ],
            [
                "titulo" => "motorola",
                "descripcion" => "calidad precio",
                "precio" => 499,
                "imagen" => "https://motorolaus.vtexassets.com/arquivos/ids/163726/motorola-edge-40-ecom-render-1-jet-black-mao5a6wy.png?v=638325036924600000"
            ],
        ];

        return view('productos', $datos[$indice-1]);
    }

    public function create() {
        return view("productos/Create");
    }

    public function store() {
        $productoModel = new ProductoModel();

        $datos = [
            "nombre" => $this->request->getVar("nombre"),
            "imagen" => $this->request->getVar("imagen"),
            "descripcion" => $this->request->getVar("descripcion"),
            "precio" => $this->request->getVar("precio"),
        ];

        $resultado = $productoModel->insert($datos);
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
} 
