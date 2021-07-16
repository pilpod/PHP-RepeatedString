<?php

namespace App;

use Exception;

class RepeatedString {

    public function repeat(string $s,int $n) : int
    {
        $len = strlen($s);
        print_r($len); // longitud string

        $occurence = substr_count($s, "a");
        print_r($occurence); // cantidad de a

        $mul = floor ($n / $len);
        print_r($mul); // Dividimos para saber cuantas veces se repite el string entero redondeando  la baja

        $reminder = $n % $len;
        print_r($reminder); // Calculamos el resto para saber cuantas letras tiene la última secuencia

        $su = substr($s,0,$reminder);
        print_r($su); // obtenemos los caracteres de la última secuencia

        // Cantidad de a por secuencia repetida más cantidad de a en la última secuencia
        $result = ($occurence * $mul) + substr_count($su,"a");
        print_r($result);

        return $result;
    }

}