<?php
/** @var $news array */
?>
<div class="second-header">
<div class="container">
  <h1>Новости</h1>
</div>
</div>
<div class="container">

<?php foreach ($news as $newss): ?>
    <div class="flexrow mt-40">
        <div class="news-img-news"><img src="<?= PATH . $newss['img_big'] ?>" alt="" class="imgNews">
        </div>
        <div class="news-content-news">
            <div class="news-header-news"><?=$newss['h1'];?>
            </div>
            <div class="news-text"><?=$newss['content_description'];?> </div>
            <a href="<?= PATH ?>/news/<?=$newss['slag'];?>">
                <div class="moreBottomObject mla">Подробнее</div>
            </a>
        </div>
    </div>
<?php endforeach; ?>
    <div class="center"><?= $pagination ?></div>

    <br>
    <br>
    <br>
</div>