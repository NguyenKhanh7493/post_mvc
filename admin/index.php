<?php
$action = $_GET['action'];
$controller = $_GET['controller'];

$controllerName = $controller.'Controller';
require_once('controllers/'.$controllerName.'.php');
$controller = new $controllerName();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $controller->$action($id);
}else{
    $controller->$action();
}





?>