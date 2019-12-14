<?php
    // Objeto Articulo
    class Articulo {

        // Atributos
        public $Id;
        public $Titulo;
        public $Imagen;
        public $Contenido;
        public $Categoria;

        // Metodos
        public function CrearArticulo() {
            echo 'Identificador : '.$this->Id;
            echo 'Titulo : '.$this->Titulo;
            echo 'Imagen : '.$this->Imagen;
            echo 'Contenido : '.$this->Contenido;
            echo 'Categoria : '.$this->Categoria;
        }

    }

    // Instanciamos clase articulo
    $NuevoArticulo = new Articulo();
    $NuevoArticulo -> Id = '001';
    $NuevoArticulo -> Titulo = 'Nuevo post';
    $NuevoArticulo -> Imagen = 'imagen_post.jpg';
    $NuevoArticulo -> Contenido = 'Lorem ipsun.....';
    $NuevoArticulo -> Categoria = 'Tecnologia';
    $NuevoArticulo -> CrearArticulo();