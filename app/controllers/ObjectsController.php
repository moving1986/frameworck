<?php


namespace app\controllers;

use app\models\AppModel;
use app\models\Objects;
use RedBeanPHP\R;

class ObjectsController extends AppController
{
    public function viewAction() {

        $objects=$this->model->getObjects();
        $meta = $this->model->GetMetaObjects();
        $this->setMeta($meta['title'], $meta['description'], $meta['keywords']);
        $this->set(compact('objects'));

    }
}