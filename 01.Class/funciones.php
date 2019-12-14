<?php

    // Funcion sin parametros
    function Saludo(){
        echo 'Hola, buenas tardes';
    }
    // Saludo();

    // Funcion con parametros
    function SaludoEstudiante($Nombre){
        echo 'Hola '.$Nombre.', bienvenido a Educatecnica';
    }
    // SaludoEstudiante('David');

    // Funciones 'return'
    function Sumar($Valor1, $Valor2) {
        return $Valor1 + $Valor2;
    }

    echo Sumar(10, 15) + 10;

?>