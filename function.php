<?php
function e($text, $type = "alert-info")
{
    echo "<div class=\"container mt-2\">";
    echo "<div class=\"alert  margin $type\">";
    echo "<strong>$text</strong>";
    echo "</div>";
    echo "</div>";
}

function delete_item($id){
    try {
        $conn = new connection();
        $sql = $conn->myPDO;
        $query = $sql->prepare("DELETE FROM category WHERE ID = :id");
       return $query->execute([':id'=>$id]);

    }catch (PDOException $e){
        e($e->getMessage(),"alert-danger");
    }
}


?>
