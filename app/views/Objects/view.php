<?php
/** @var $objects array */
?>
<div class="second-header">
    <div class="container">
        <h1>Наши объекты</h1>
    </div>
</div>
<div class="container">
    <?php foreach ($objects as $object): ?>
        <div class="flexrow mt-40">
            <div class="news-img-news"><img src="<?= PATH ?>/assets/img/objects/<?= $object['img'] ?>" alt="" class="img">
            </div>
            <div class="news-content-news">
                <div class="news-header-news"><?=$object['title'];?>
                </div>
                <div class="news-text"><?=$object['description'];?> </div>

            </div>
        </div>
    <?php endforeach; ?>

    <br>
    <br>
    <br>
</div>