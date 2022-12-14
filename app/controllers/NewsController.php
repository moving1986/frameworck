<?php


namespace app\controllers;

use app\models\AppModel;
use app\models\News;
use RedBeanPHP\R;
use svdsu\Pagination;

class NewsController extends AppController
{
    public function viewAction() {

        $total = R::count('news');
        $page = isset($_GET['page']) ? (INT)$_GET['page'] : 1;
        $perpage = 5;
        $pagination = new Pagination($page,$perpage,$total);
        $start = $pagination->getStart();

        $news=$this->model->getNews($start, $perpage);
        $meta = $this->model->GetMetaNews();
        $this->setMeta($meta['title'], $meta['description'], $meta['keywords']);
        $this->set(compact('news', 'pagination', 'total'));

    }
    public function indexAction()
    {
        $news=$this->model->getNewsOne($this->route['slug']);
        $this->setMeta($news['title'], $news['description'], $news['keywords']);
        $this->set(compact('news'));
    }
}