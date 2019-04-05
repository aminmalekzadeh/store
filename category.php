<?php
require_once 'section/head.php';
require_once 'function.php';
require_once 'config.php';
$name = $_POST['name'];
$parent = $_POST['parent'];
$id = $_POST['id'];
try{
    $myPDO = new PDO("mysql:host=$host;dbname=$namedb",$username,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $result = $myPDO->prepare('INSERT INTO category(id,name,parent) VALUES (:ID,:name,:parent)');
    $result->bindParam(':name',$name);
    $result->bindParam(':parent',$parent);
    $result->bindParam(':ID',$id);
    $result->execute();
    e("اطلاعات با موفقیت ثبت شد.","alert-success");
}catch (PDOException $e){
    e($e->getMessage(),"alert-danger");
}
?>
