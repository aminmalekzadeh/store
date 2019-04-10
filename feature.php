<?php
require_once 'function.php';
require_once 'config.php';
require_once 'controller/FeatureController.php';

$model = new FeatureModel();
$model->name = $_POST['title'];
$model->parent = $_POST['parent'];
$model->cat_id = $_POST['cat_id'];
$id = $_GET['id'];
$f = new Feature();
$f->addFeauture($model);
header("location : View/feature.view.php");
die;

?>



