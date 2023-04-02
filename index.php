<h1>Página con mvc</h1>
<?php
    require_once 'controllers/Usuarios.php';
    if(isset($_GET['controller']) && class_exists($_GET['controller'])){
        $controlador = $_GET['controller'];
        $controlador = new $controlador();

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