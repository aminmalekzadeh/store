<?php
require_once 'section/head.php';
require_once 'function.php';
require_once 'config.php';
require 'controller/categoryController.php';

$model = new CategoryModel();
$model->name =  $_POST['name'];
$model->parent =  $_POST['parent'];


$cat = new Category();
$cat->addCategory($model);


//*
?>
