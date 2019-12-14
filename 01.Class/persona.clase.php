<?php
    // Objeto Persona
    class Persona {

        // Atributos
        public $Nombre;
        public $Apellidos;
        public $CedulaIdentidad;
        public $Edad;
        public $Genero;

        // Metodos
        public function Programar(){
            echo 'La persona '.$this->Nombre.' esta programando<br>';
        }
        public function Comer(){
            echo 'La persona '.$this->Apellidos.' esta comiendo<br>';
        }
        public function Dormir(){
            echo 'La persona '.$this->Nombre.' esta durmiendo<br>';
        }
    }

    // Instancia
    $PersonaUno = new Persona();
    $PersonaUno -> Nombre = 'David';
    $PersonaUno -> Programar();

    $PersonaDos = new Persona();
    $PersonaDos -> Apellidos = 'Morales Vega';
    $PersonaDos -> Comer();

    $PersonaTres = new Persona();
    $PersonaTres -> Nombre = 'Alvaro';
    $PersonaTres -> Dormir();

    $PersonaCuatro = new Persona();
    $PersonaCuatro -> Nombre = 'Oscar';
    $PersonaCuatro -> Programar();