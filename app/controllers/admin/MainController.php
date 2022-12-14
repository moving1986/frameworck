<?php


namespace app\controllers\admin;


class MainController extends AppController
{
    public function indexAction()
    {
        $title = 'Главная страница';
        $this->setMeta('Административная часть:::Главная страница' );
        $this->set(compact('title'));
    }

}