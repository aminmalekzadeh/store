<?php
require_once 'function.php';
require_once 'config.php';
if (isset($_GET['id'])){
        $id = $_GET['id'];

try {

        $conn = new connection();
        $sql = $conn->myPDO;
        $query = $sql->prepare("DELETE FROM category WHERE ID = :id");
        echo $query->execute([':id' => $id]);
        header('Location: View/edit-category.view.php');
        die;


} catch (PDOException $e) {
    e($e->getMessage(), "alert-danger");
}
}

?>
