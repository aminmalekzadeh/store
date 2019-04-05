<?php
require_once 'config.php';
require_once 'baseController.php';

class CategoryModel
{
    public $id;
    public $name;
    public $parent;
}


class Category extends baseController
{
    public function addCategory(CategoryModel $model)
    {
        try {
            $result = $this->pdo->prepare('INSERT INTO category(NAME,PARENT) VALUES (:name,:parent)');
            $result->bindParam(':name', $model->name);
            $result->bindParam(':parent', $model->parent);
            if ($result->execute()) {
                e("اطلاعات با موفقیت ثبت شد.", "alert-success");
            } else {
                e("خطا در ذخیره اطلاعات", 'alert-danger');
            }
            echo "<script>
         window.setTimeout(function(){
        window.location.href = '/store/category.view.php';
 }, 3000);
</script>";
        } catch (PDOException $e) {
            e($e->getMessage(), "alert-danger");
        }
    }

    public function getCategory()
    {
        try {
            $result = $this->pdo->prepare('SELECT * FROM category');
            if ($result->execute()) {
                e("اطلاعات با موفقیت ثبت شد.", "alert-success");
            } else {
                e("خطا در ذخیره اطلاعات", 'alert-danger');
            }
            $fetch = $result->fetchAll();
            return $fetch;
        } catch (PDOException $e) {
            e($e->getMessage(), "alert-danger");
        }
    }
}


?>