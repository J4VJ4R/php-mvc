<?php
    require_once 'controllers/Usuarios.php';
    $controlador = new UsuarioController();
    $controlador->showAll();

    $controlador->create();
?>