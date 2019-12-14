<?php
    // Controladores
    require_once 'controllers/template.controller.php';
    require_once 'controllers/link.controller.php';
    // Modelos
    require_once 'models/link.model.php';

    $Template = new TemplateControllers();
    $Template -> RequestTemplateController();