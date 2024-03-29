<?php


namespace svdsu;


use app\models\AppModel;
use Valitron\Validator;
Use RedBeanPHP\R;


abstract class Model
{
    public array $attributes = [];
    public array $errors = [];
    public array $roles = [];
    public array $labels = [];

    public function __construct()
    {
        Db::getInstance();
    }

    public function load($data)
    {
        foreach ($this->attributes as $name => $value) {
            if (isset($data[$name])) {
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    public function validate($data): bool
    {
        Validator::langDir(APP . '/languages/validator/lang');
        Validator::lang('ru');
        $validator = new Validator($data);
        $validator->rules($this->rules);
        $validator->labels($this->getLabels());
        if ($validator->validate()) {
            return true;
        } else {
            $this->errors = $validator->errors();
            return false;
        }
    }

    public function getErrors()
    {
        $errors = '<ul>';
        foreach ($this->errors as $error) {
            foreach ($error as $item) {
                $errors .= "<li>{$item}</li>";
            }
        }
        $errors .= '</ul>';
        $_SESSION['errors'] = $errors;
    }

    public function getLabels(): array
    {
        $labels = [];
        foreach ($this->labels as $k => $v) {
            $labels[$k] = $v;
        }
        return $labels;
    }

    public function save($table): int|string
    {
        $tbl = R::dispense($table);
       foreach ($this->attributes as $name => $value) {
           if($value !=''){
               $tbl->$name = $value;
           }
       }
        return R::store($tbl);
    }

    public function pagenation()
    {

    }

}