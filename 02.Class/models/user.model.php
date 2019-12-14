<?php
    require_once 'config.model.php';

    class UserModels {

        public function ListUsersModel(){
            // Preparar la consulta
            $stmt = ConfigModels::ConnectionModel()->prepare("SELECT * FROM user");
            // Ejecutar consulta preparada
            $stmt -> execute();
            // Retornar usuarios en un arreglo o en un objeto
            return $stmt -> fetchAll();
        }

        public function InsertUserModel($DataModel){
            // Preparar la consulta
            $stmt = ConfigModels::ConnectionModel()->prepare("INSERT INTO user (UName, UPassword) VALUES (:UName, :UPassword)");
            // bindParam(nombre, valor, tipo, longitud)
            $stmt -> bindParam(':UName', $DataModel['UUser'], PDO::PARAM_STR);
            $stmt -> bindParam(':UPassword', $DataModel['UPassword'], PDO::PARAM_STR);
            return ($stmt -> execute()) ? 'success' : 'error';
        }

    }