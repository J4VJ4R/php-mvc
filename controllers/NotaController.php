<?php
require_once 'models/ModeloBase.php';

class NotaController extends ModeloBase{
    public function listar(){
        //cargamos modelo
        require_once 'models/Nota.php';

        //cargamos obejto y acciones del controlador
        $nota = new Nota();
        $notas = $nota->getAll('notas');
        //cargamos vista
        require_once 'views/nota/listar.php';
    }

    public function crear(){
        // Llamo al modelo
        require_once 'models/Nota.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("nota desde php con mvc");
        $nota->setDescripcion("Descripción de mi nota");
        $guardar = $nota->guardar();

       
        header("Location: index.php/?controller=Nota&action=listar");

    }

    public function borrar(){

    }

    
}