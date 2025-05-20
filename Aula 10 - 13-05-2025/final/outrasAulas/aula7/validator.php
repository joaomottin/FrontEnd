<?php


    function campoObrigatorio($valor) : bool{
        return (is_null($valor) || empty(trim($valor)) );
    }

    function tamanhoString(string $valor, int $min = 5, int $max = 10) : bool {
        $tam = strlen($valor);
        return ($tam < $min || $tam > $max);
        // return ($tam < 5 || $tam > 10);
    }


?>