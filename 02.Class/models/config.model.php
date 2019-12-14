<?php
    class ConfigModels
    {
        public function ConnectionModel(){
            $connect = new PDO('mysql:host=localhost;dbname=appseguras',
            'root', 'firebase');
            return $connect;
        }
    }