<?php


namespace app\models;



use RedBeanPHP\R;

class Main extends AppModel
{
    public function getNewsLine($limit):array {
        return R::getAll("SELECT * FROM news ORDER BY id DESC LIMIT $limit");
    }
    public function getObjectsLine($limit):array {
        return R::getAll("SELECT * FROM objects ORDER BY id DESC LIMIT $limit");
    }
}