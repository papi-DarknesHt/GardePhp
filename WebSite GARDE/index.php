<?php
require_once ".config/config.php";

require_once '.function/language.php';
if(isset($_GET['page']) and !empty($_GET['page'])){
    $page = trim(strtolower($_GET['page']));
}
else{
    $page = 'acceuil';
}
$allPAges = scandir('Controller/');
if(in_array($page.'controller.php', $allPAges)){
    include 'Models/'.$page.'Model.php';
    include 'Controller/'.$page.'controller.php';
    include 'VIEWS/'.$page.'View.php';
}
else{
    $page = 'errorpage';
    $allPAges = scandir('Controller/');
    if(in_array($page.'controller.php', $allPAges)) {
        include 'Models/' . $page . 'Model.php';
        include 'Controller/' . $page . 'controller.php';
        include 'VIEWS/' . $page . 'View.php';
    }
}
?>
<!--<img src="ASSET/IMAGES/istockphoto-1488294044-1024x1024SVG.svg">-->
<!--<link rel="stylesheet" href="ASSET/fontawesome/CSS/fontawesome.min.css">-->