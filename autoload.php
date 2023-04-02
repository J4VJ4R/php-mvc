<?php

function autoload($clasename){
    include 'controllers/'.$clasename.'.php';
}

spl_autoload_register('autoload');