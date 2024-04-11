<?php

class numeroperfecto
{
    // public $Inicio;
    // public $Fin;

    function __construct() {
    //    $this->Inicio=$Inicio;
    //    $this->Fin=$Fin;
    }

    function esNumeroPerfecto($numero) {
        if ($numero <= 0) {
            return false; // Los números negativos y cero no son números naturales perfectos
        }
    
        $sumaDivisores = 0;
    
        for ($i = 1; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                $sumaDivisores += $i;
            }
        }
    
        return $sumaDivisores == $numero;
    }
    
    function buscarNumerosPerfectosEnRango($inicio, $fin) {
        if ($inicio > $fin) {
            // echo "El primer número debe ser menor o igual que el segundo número en el rango.\n";
            return []; // Devuelve un arreglo vacío como indicador de error
        }
        $numerosPerfectos = [];
    
        for ($numero = $inicio; $numero <= $fin; $numero++) {
            if ($this->esNumeroPerfecto($numero)) {
                $numerosPerfectos[] = $numero;
            }
        }
    
        return $numerosPerfectos;
    }
    
}