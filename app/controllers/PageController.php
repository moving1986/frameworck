<?php


namespace app\controllers;
use app\models\Page;
use RedBeanPHP\R;

class PageController extends AppController
{
    public function viewAction() {

        $page = $this ->model->getPage($this->route['slug']);

        $this->setMeta($page['title'], $page['description'], $page['keywords']);
        $this->set(compact('page'));

    }
}