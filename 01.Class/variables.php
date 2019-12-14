<?php
    $Edad = 19;
    // echo 'Mi edad es :'.$Edad;
    var_dump($Edad);

    echo '<br>';

    $Calificacion = 35.5;
    // echo 'Mi calificacion es :'.$Calificacion;
    var_dump($Calificacion);

    echo '<br>';

    $Nombre = 'David';
    // echo 'Mi nombre es: '.$Nombre;
    var_dump($Nombre);

    echo '<br>';

    $BotonLuz = true;
    // echo 'La luz se encuentra en estado : '.$BotonLuz;
    var_dump($BotonLuz);

    $Estudiantes = array("David", "Osmar", "Alvaro", "Dante");
    var_dump($Estudiantes);

    $Universitario = array(
        'Nombre' => 'David Morales Vega',
        'Edad' => 19,
        'Genero' => 'Masculino'
    );

    echo '<pre>';
    var_dump($Universitario);
    echo '</pre>';
?>