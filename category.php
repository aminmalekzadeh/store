<?php
require_once 'section/head.php';
require_once 'function.php';
require_once 'config.php';
$name = $_POST['name'];
$parent = $_POST['parent'];

try{
    $myPDO = new PDO("mysql:host=$host;dbname=$namedb",$username,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $result = $myPDO->prepare('INSERT INTO category(NAME,PARENT) VALUES (:NAME,:PARENT)');
    $result->bindParam(':NAME',$name);
    $result->bindParam(':PARENT',$parent);
    if($result->execute()){
        e("اطلاعات با موفقیت ثبت شد.", "alert-success");
    }else{
        e("خطا در ذخیره اطلاعات",'alert-danger');
    }
}catch (PDOException $e){
    e($e->getMessage(),"alert-danger");
}
//*
?>
