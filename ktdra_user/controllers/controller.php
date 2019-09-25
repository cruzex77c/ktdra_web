<?php

    class TemplateController {

        public function plantilla(){
            require_once "views/template.php";
        }

        public function paginasController(){
            if(isset($_GET['pagina'])){
                $enlaceController = $_GET['pagina'];
            }
            $respuesta = Paginas::paginaModel($enlaceController);
            include $respuesta;

        }



    }