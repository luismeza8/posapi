<?php

namespace App\Controllers;

class Calculadora extends BaseController {

    public function sumar($num1, $num2) {
        $total = $num1+$num2;
        echo "El total es: $total";
}
    public function restar($num1, $num2) {
        $total = $num1-$num2;
        echo "El total es: $total";
}
    public function multiplicar($num1,  $num2) {
        $total = $num1*$num2;
        echo "El total es: $total";
}
    public function dividir($num1, $num2) {
        $total = $num1/$num2;
        echo "El total es: $total";
}
} 
