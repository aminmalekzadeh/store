<?php
require_once 'function.php';
require_once 'config.php';
$model = new FeatureModel();
$model->name = $_POST['title'];
$model->parent = $_POST['parent'];
$model->cat_id = $_POST['cat_id'];

$f = new Feature();
$f->addFeauture($model);
?>



