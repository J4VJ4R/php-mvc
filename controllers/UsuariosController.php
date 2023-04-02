<?php

class UsuarioController{
    public function showAll(){
        require_once 'models/Usuario.php';

        $usuario = new Usuario();
        $todos_los_usuarios = $usuario->getAll();

        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function create(){
        require_once 'views/usuarios/crear.php';
    }
}
