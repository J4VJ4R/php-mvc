<h1>Página con mvc</h1>
<?php
    require_once 'autoload.php';
    if(isset($_GET['controller'])){
        $nombre_controlador = $_GET['controller'].'Controller';
    }else{
        echo "No existe la página que buscas";
        exit;
    }

    if(class_exists($nombre_controlador)){
        $controlador = new $nombre_controlador();

        if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
            $action = $_GET['action'];
            $controlador->$action();
    
        }else{
            echo "No existe la página que buscas";
        }
    }else{
            echo "No existe la página que buscas";
    }
    
?>