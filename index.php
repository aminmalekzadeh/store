<?php
require_once 'section/head.php';
require_once 'section/header.php';
require_once 'section/content.php';
require_once 'section/footer.php';

$request = $_SERVER['REDIRECT_URL'];
switch ($request) {
    case "/":
        require_once __DIR__.'index.php';
        break;
    case "/category":
        require_once __DIR__.'/View/category.view.php';
        break;
    case "/edit-category":
        require_once __DIR__.'/View/edit-category.view.php';
        break;
    default:
        echo "404 Error!!";
        break;
}
?>
