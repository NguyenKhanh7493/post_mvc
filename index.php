<?php
$controller = $_GET['controller'];
$action = $_GET['action'];
$controllerName = $controller.'Controller';
require_once('controllers/'.$controllerName.'.php');
$controller = new $controllerName();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $controller->$action($id);
}else{
    $controller->$action();
}