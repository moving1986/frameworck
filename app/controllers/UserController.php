<?php


namespace app\controllers;

use app\models\User;

/** @property User $model */

class UserController extends AppController
{
    public function signupAction()
    {
        if(User::checkAuth()){
            redirect('https://svdsu.ru');
        }

        if(!empty($_POST)) {
            $data = $_POST;
            $this->model->load($data);
            if(!$this->model->validate($data)|| !$this->model->checkUnique())  {
                 $this->model->getErrors();;
                 $_SESSION['form_data'] = $data;
            }else {
                $this->model->attributes['password'] = password_hash($this->model->attributes['password'], PASSWORD_DEFAULT );
                if($this->model->save('user')) {
                $_SESSION['success'] = "Вы успешно зарегистрировались";
                    } else $_SESSION['errors'] = "Неудачная решистрация";
            }

        }

        $this ->setMeta('Регитрация на сайте');
    }

    public function loginAction()
    {
        if (User::checkAuth()) {
            redirect('https://svdsu.ru');
        }

        if (!empty($_POST)) {
            if ($this->model->login()) {
                $_SESSION['success'] = 'Вы успешно авторизированны';
                redirect('https://svdsu.ru');
            } else {
                $_SESSION['errors'] = 'Ошибка аторизации логин или пароль введены неверно';

            }
        }

        $this->setMeta('Авторизация пользователей');
    }
    public function logoutAction()
    {
        if (User::checkAuth()) {
            unset($_SESSION['user']);
        }
        redirect('https://svdsu.ru/user/login');
    }



}