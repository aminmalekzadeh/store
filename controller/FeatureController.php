<?php

class FeatureModel
{
    public $ID;
    public $name;
    public $parent;
    public $cat_id;
}
class Feature{
    private $pdo;

    function __construct()
    {
        $conn = new connection();
        $this->pdo = $conn->myPDO;
    }

    public function addFeauture(FeatureModel $model){
        try{
            $result = $this->pdo->prepare('INSERT INTO feature(name,parent_id,cat_id) VALUES (:name,:parent_id,:cat_id)');
            $result->bindParam(":name",$model->name);
            $result->bindParam(":parent_id",$model->parent);
            $result->bindParam(":cat_id",$model->cat_id);
            if ($result->execute()) {
                e("اطلاعات با موفقیت ثبت شد.", "alert-success");
            } else {
                e("خطا در ذخیره اطلاعات", 'alert-danger');
            }
        }catch (PDOException $e){
            e($e->getMessage(),"alert-danger");
        }
    }
    public function getFeature(){
        try {
            $result = $this->pdo->prepare('SELECT * FROM feature');
            $result->execute();
            $fetch = $result->fetchAll();
            return $fetch;
        } catch (PDOException $e) {
            e($e->getMessage(), "alert-danger");
        }
    }

}
