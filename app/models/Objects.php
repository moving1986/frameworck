<?php


namespace app\models;


use RedBeanPHP\R;

class Objects extends AppModel
{
    public function getObjects():array
    {
        return R::getAll("SELECT * FROM objects");
    }
    public function GetMetaObjects():array {
        return R::getRow("SELECT * FROM category_description WHERE category_id=3");
    }
}