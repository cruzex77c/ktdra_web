<?php

    class Paginas {
        public function paginaModel($enlaceModel){
            if($enlaceModel == 'registro'){
                $module = 'views/modules/'.$enlaceModel.'.php';
            }

            return $module;
        }
    }