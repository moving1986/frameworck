<?php


namespace app\controllers\admin;


use app\models\AppModel;
use svdsu\Controller;

class AppController extends Controller
{
    public false|string $layout = 'admin';

    public function __construct(public $route = [])
    {
        parent::__construct($route);
        new AppModel();
    }


}