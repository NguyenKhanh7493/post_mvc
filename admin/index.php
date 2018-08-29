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
//include_once('models/PostModel.php');
//$typejoin = new PostModel();
//$type_news = $typejoin->addTypeNews();
//print_r($type_news);




?>