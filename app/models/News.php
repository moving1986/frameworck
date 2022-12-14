<?php


namespace app\models;


use RedBeanPHP\R;

class News extends AppModel
{
    public function getNews($start, $perpage):array {
        return R::getAll("SELECT * FROM news ORDER BY id DESC LIMIT $start, $perpage");

    }
    public function GetMetaNews():array {
        return R::getRow("SELECT * FROM category_description WHERE category_id=1");
    }
    public function getNewsOne($slag):array {
        return R::getRow("SELECT * FROM news WHERE slag=?", [$slag]);
    }

    public function getCounter($id)
    {
        if (isset($_POST['count']) && (int)$_POST['count'] === 1):
            try {
                $stmt = R::getAll("SELECT `value` FROM counter WHERE `id` = 1");
                $data = (int)$stmt->fetchColumn();
                $data++;
                $query = "UPDATE `counter` SET `value` = :value WHERE `id` = :id";
                $params = [
                    ':id' => 1,
                    ':value' => $data
                ];
                $stmt = R::prepare($query);
                $stmt->execute($params);
                echo json_encode($data);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        endif;
    }

}