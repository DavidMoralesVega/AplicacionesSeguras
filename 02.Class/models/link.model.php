<?php
    class LinkModels {
        public function LinkValidateModel($LinkModel){
            if(
                $LinkModel == 'user' ||
                $LinkModel == 'home' ||
                $LinkModel == 'support'
            ){
                $component = 'views/components/'.$LinkModel.'.php';
            } else if ($LinkModel == 'index') {
                $component = 'views/components/user.php';
            } else {
                $component = 'views/components/404.php';
            }
            return $component;
        }
    }