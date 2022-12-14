<?php


namespace app\models;

use RedBeanPHP\R;

class Page extends AppModel
{
    public function getPage($slag):array {
        return R::getRow("SELECT * FROM page WHERE slag=?", [$slag]);

    }
}