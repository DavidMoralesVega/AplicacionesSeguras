<?php
    class TemplateControllers
    {
        // LLamar a mi plantilla (viewss/template.php)
        public function RequestTemplateController()
        {
            // Invocando el archivo de la plantilla
            require_once 'views/template.php';
        }

        // Llamar al menu
        public function RequestHeaderController(){
            require_once 'views/shared/header.php';
        }

        // Llamar al footer
        public function RequestFooterController(){
            require_once 'views/shared/footer.php';
        }
    }
