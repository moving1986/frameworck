<?php


namespace app\controllers;


use app\models\Main;
use RedBeanPHP\R;

/** @property Main $model */

class MainController extends AppController
{

    public function indexAction()
    {
        $sliders = R::findAll('main_slider');
        $this->setMeta('ГУП ДХ АК "Северо-Восточное ДСУ"', 'Дорожно строительное управление' , 'Строительство дорог, Ремонт дорог');
        $newsline = $this->model->getNewsLine(3);
        $objectsline = $this->model->getObjectsLine(3);
        $this->set(compact('sliders', 'newsline', 'objectsline'));
    }



}