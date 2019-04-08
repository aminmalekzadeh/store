<?php
require_once 'function.php';
require_once 'config.php';
$name = $_POST['name'];
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    try {
        $conn = new connection();
        $sql = $conn->myPDO;
        $result = $sql->prepare('update category set NAME = :name where ID = :id');
        $result->bindParam(':name',$name);
        $result->bindParam(':id',$id);
        $result->execute();
        header('Location: View/edit-category.view.php');
        die;
    } catch (PDOException $e) {
        e($e->getMessage(), "alert-danger");
    }
}
?>
