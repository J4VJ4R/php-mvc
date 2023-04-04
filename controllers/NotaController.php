<?php
require_once 'models/ModeloBase.php';

class NotaController extends ModeloBase{
    public function listar(){
        //cargamos modelo
        require_once 'models/Nota.php';

        //cargamos obejto y acciones del controlador
        $nota = new Nota();
        $nota->setNombre("Jaime");
        $nota->setContenido("Hola mundo con PHP MVC");

        $notas = $nota->getAll('notas');
        //cargamos vista
        require_once 'views/nota/listar.php';
    }

    public function crear(){

    }

    public function borrar(){

    }

    
}