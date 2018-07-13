<?php
$action = $_GET['action'];
$controller = $_GET['controller'];
$controllerName = $controller.'Controller';
 require_once('controllers/'.$controllerName.'.php');
$controller = new $controllerName();
$controller->$action();
//$controller = isset($_GET['controller'])? $_GET['controller'].'Controller': 'LoginController';
//$action = isset($_GET['action'])?$_GET['action']:'login';
//require_once('controllers/LoginController.php');
//$logincontroller = new $controller;
//$logincontroller->$action();
?>