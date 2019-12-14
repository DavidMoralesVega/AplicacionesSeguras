<?php
    class LinkControllers {
        public function LinkValidateContoller(){
            if(isset($_GET['link'])){
                $LinkController = $_GET['link'];
            } else {
                $LinkController = 'index';
            }
            $response = LinkModels::LinkValidateModel($LinkController);
            require_once $response;
        }
    }