<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function saludar() {
        echo("<h1>hola mundo</h1>");
        echo("<p>asdf</p>");
    }

    public function saludar2($nombre, $edad) {
        echo("hola $nombre y tienes $edad");
        if($edad>=18) {
            echo "mayor de edad";
        }else{
            echo "menor de edad";
        }
    }

    public function dashboard() {
        return view("dashboard");
    }
}
