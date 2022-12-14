<!-- Start slider -->
   <div>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
         data-bs-interval="5000">
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < count($sliders); $i++): ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" <?php if ($i == 0) echo 'class="active"' ?> aria-current="true" aria-label="Slide <?= $i ?>"></button>
            <?php endfor; ?>
        </div>
        <div class="carousel-inner">
            <?php $i = 1; foreach ($sliders as $slide): ?>
                <div class="carousel-item center <?php if ($i == 1) echo 'active' ?>">
                    <img src="<?= PATH . $slide->img ?>" class="img w-100" alt="">
                    <span class="slider_text"><?=$slide->text ?></span>
                </div>
                <?php $i++; endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   </div>
<!-- End slider-->


<!-- Start about -->
    <div class="container">
        <div class="about">
            <h2><span class="blueLine">ГУП ДХ АК</span> «Северо-Восточное ДСУ» </h2>
            <p>ГУП ДХ АК «Северо-Восточное ДСУ» образовано в 1962 году. Вид основной деятельности предприятия – строительство автомобильных дорог и автомагистралей. В 2015 году состоялась реорганизация предприятия путем присоединения десяти дорожных хозяйств северо-восточной зоны. В состав ГУП ДХ АК «Северо-Восточное ДСУ» вошли филиалы: Залесовский, Заринский, Косихинский, Кытмановский, Первомайский, Тальменский, Тогульский, Троицкий, Целинный.</p>
            <p>На содержании у предприятия находится 208 км федеральных дорог, 3124,96 км автомобильных дорог общего пользования регионального и муниципального значения, 13 развязок, 204 мостовых сооружения. </p>
            <p>Предприятие имеет хорошую, постоянно развивающуюся производственную базу: </p>
            <ul>
                <li>машины, механизмы, автотранспорт, парк которых ежегодно пополняется;</li>
                <li>ремонтные мастерские; </li>
                <li>теплые гаражи для стоянки дорожной техники и автотранспорта;</li>
                <li>механизированные склады для хранения строительных материалов и запасных частей; </li>
                <li>асфальтобетонные заводы и передвижной асфальтобетонный завод «AMMANN»;</li>
                <li>завод по выпуску цементобетонной продукции.</li>
            </ul>
            <p>	На предприятии работает служба контроля качества, в состав которой входят аттестованная строительная лаборатория, оборудованная современными средствами измерений и контроля качества поступающих строительных материалов, выпускаемой продукции.</p>
            <p>На все выполняемые работы имеются допуски на проведение работ, оказывающих влияние на безопасность объектов капитального строительства. Выпускаемая заводами ДСУ продукция сертифицирована, применяемые материалы и конструкции имеют паспорта и сертификаты качества.</p>
        </div>
    </div>

<!-- End about -->
<!-- Start news -->
<div class="news">
    <h2><span class="blueLine">Но</span>вости</h2>
       <div class="container mainPagenews">
           <?php foreach($newsline as $news): ?>
            <div class="news-first-block">
                <div class="news-img"><img src="<?= PATH . $news['img_big']; ?>" alt="<?= $news['title']; ?>" class="imgNews">
                    <div class="news-header"><?= $news['title']; ?>
                    </div>
                </div>
                <div class="news-content">
                    <div class="news-text"><?= $news['content_description']; ?></div>
                    <a href="<?= PATH ?>/news/<?= $news['slag'];?>">
                        <div class="moreBottomObject">Подробнее</div>
                    </a>
                </div>
            </div>
           <?php endforeach; ?>
       </div>
 </div>
<!-- End News -->
<!-- Start about us -->
<article class="mb-30">
    <h2><span class="blueLine">На</span>ши объекты</h2>
    <div class="container">
        <p class="textOurobjects">
           Дорожную сеть недаром образно называют кровеносной системой любого региона. Рост экономики и улучшение социальной сферы напрямую зависят от хороших дорог. По их состоянию судят о развитии и привлекательности территории. Состояние магистралей Алтайского края все больше соответствует современным стандартам, и главная заслуга в этом принадлежит отраслевым предприятиям. В их числе государственное унитарное предприятие дорожного хозяйства Алтайского края «Северо-Восточное дорожно-строительное управление».
        </p>
        <p class="textOurobjects">
           За годы существования предприятия в Алтайском крае построено, реконструировано и капитально отремонтировано более 2000 км дорог, построено более 30 средних и малых мостов и путепроводов. На содержании у предприятия находится 208 км федеральных дорог, 3124,96 км автомобильных дорог общего пользования регионального и муниципального значения, 13 развязок, 204 мостовых сооружения.
        </p>
          <div class="Objects">
          <?php foreach($objectsline as $object): ?>
            <div class="ourObjects">
                <img src="<?= PATH ?>/assets/img/objects/<?= $object['img'] ?>" alt="<?= $object['title'] ?>" class="img">
                <div class="headerObjects"><?= $object['title'] ?></div>
                <p class="ourObjectstext"><?= $object['description']; ?></p>
            </div>
          <?php endforeach; ?>
          </div>
         </div>
    <div class="container">
        <a href="<?= PATH ?>/objects" title="">
            <div class="moreBottom mla">
                Смотреть галерею >>
            </div>
        </a>
    </div>
</article>
<!-- End about us -->
<!-- Start advantages -->
<article class="advantages">
    <h2><span class="blueLine">На</span>ши преимущества</h2>
    <div class="container advantagesBlock">
        <div class="flexcol Aflexcol">


            <div class="advantagesItem flexrow">
                <div class="imgAdv"><object data="<?= PATH ?>/assets/img/icoNadejnost.svg" type="image/svg+xml"></object></div>
                <div class="advText">
                    <div class="headAdv">Надежность</div>
                    <p>Предприятие активно применяет современную технику и передовые технологии. ДСУ имеет хорошую, постоянно развивающуюся производственную базу (ремонтные мастерские, теплые гаражи для стоянки дорожной техники и автотранспорта, механизированные склады для хранения строительных материалов и запасных частей, асфальтобетонные заводы и передвижной асфальтобетонный завод «AMMANN», завод по выпуску цементобетонной продукции). Полностью оснащено современным оборудованием, машинами, механизмами, автотранспортом, парк которых ежегодно пополняется. </p>
                </div>
            </div>


            <div class="advantagesItem flexrow">
                <div class="imgAdv"><object data="<?= PATH ?>/assets/img/icoQuality.svg" type="image/svg+xml"></object></div>
                <div class="advText">
                    <div class="headAdv">Высокое качество</div>
                    <p>На предприятии работает служба контроля качества, в состав которой входят аттестованная строительная лаборатория, оборудованная современными средствами измерений и контроля качества поступающих строительных материалов, выпускаемой продукции. На все выполняемые работы имеются допуски на проведение работ, оказывающих влияние на безопасность объектов капитального строительства, выпускаемая заводами ДСУ продукция сертифицирована, применяемые материалы и конструкции имеют паспорта и сертификаты качества.</p>
                </div>
            </div>

            <div class="advantagesItem flexrow">

                <div class="imgAdv"><object data="<?= PATH ?>/assets/img/icoReviews.svg" type="image/svg+xml"></object></div>
                <div class="advText">
                    <div class="headAdv">Коллектив</div>
                    <p>Штат работников ГУП ДХ АК «Северо-Восточное ДСУ» укомплектован высококвалифицированными кадрами для выполнения всех видов дорожно-строительных работ, постоянно повышающих свою квалификацию. Численность предприятия с каждым годом увеличивается и насчитывает более 850 человек.</p>
                </div>
            </div>

        </div>
        <div class="advantagesImage">
            <img src="<?= PATH ?>/assets/img/advantageMediumImage.jpg" alt="" class="advMediumImg">
            <img src="<?= PATH ?>/assets/img/advantageSmallImage.jpg" alt="" class="advSmallImg">
            <img src="<?= PATH ?>/assets/img/advantageBigImage1.jpg" alt="" class="advBigImg">

        </div>
    </div>
</article>

<!-- End advantages -->
<!-- Start Our workers -->

<article class="ourWorker">
    <h2><span class="blueLine">Ру</span>ководство</h2>
    <div class="container worckers">

        <div class="ourWorkersItem">
            <div class="workersImgTitle">
                <div class="worckerImg"><img src="<?= PATH ?>/assets/img/icoWorcker2.jpg" alt="Начальник ГУП ДХ АК Северо-Восточное ДСУ"></div>
                <div class="workerHead"><p class="
            workName">СОМОВ Роман Витальевич</p>
                    <p class="worckPost">Начальник</p>
                </div>
            </div>
            <div class="worckerText">
                 Начал трудовую деятельность в декабре 2000 года в Шипуновском ДРСУ в должности инженера по охране труда и технике безопасности с исполнением обязанностей геодезиста. С 2005 по 2011 годы работал мастером, с 2011 года — главный инженер Шипуновского ДРСУ. В марте 2018 года назначен на должность начальника ГУП ДХ АК «Северо-Западное ДСУ».
                25 февраля 2022г.,назначен на должность начальника государственного унитарного предприятия дорожного хозяйства Алтайского края «Северо-Восточное дорожно-строительное управление».
            </div>
            <a href="#" title=""><div class="moreBottomWorckers">Подробнее</div></a>
        </div>

        <div class="ourWorkersItem">
            <div class="workersImgTitle">
                <div class="worckerImg"><img src="<?= PATH ?>/assets/img/icoWorcker1.png" alt="Главный инженер"></div>
                <div class="workerHead"><p class="
            workName">ФЕДОТОВ Иван Александрович</p>
                    <p class="worckPost">Главный инженер</p>
                </div>
            </div>
            <div class="worckerText">
                С 2002 года работал в дорожном хозяйстве Алтайского края в составе студенческих строительных отрядов. В предприятии начал свою трудовую деятельность в 2006 году в должности геодезиста. В 2009г. переведен инженером-геодезистом с правами и обязанностями начальника геодезического отдела, в мае 2013г. переведен начальником инженерно-геодезического отдела. В июле 2017 года назначен заместителем начальника по строительству и ремонту автомобильных дорог предприятия. С марта 2022 года назначен на должность главного инженера предприятия.
            </div>
            <a href="#" title=""><div class="moreBottomWorckers">Подробнее</div></a>
        </div>
        <div class="ourWorkersItem">

            <div class="workersImgTitle">
                <div class="worckerImg"><img src="<?= PATH ?>/assets/img/icoWorcker3.jpg" alt="Заместитель начальника"></div>
                <div class="workerHead"><p class="
              workName">МОЩЕНСКИХ Алексей Викторович</p>
                    <p class="worckPost">Заместитель начальника</p>
                </div>
            </div>
            <div class="worckerText">
                Мощенских Алексей Викторович свою трудовую деятельность на предприятии начал в 2011 году мастером строительных и монтажных работ, в мае 2013 года назначен на должность производителя работ участка по содержанию автомобильных дорог и искусственных сооружений на них. С октября 2021 года назначен на должность заместителя по эксплуатации и содержанию автомобильных дорог. <br/><br/><br/><br/>
            </div>
            <a href="#" title=""><div class="moreBottomWorckers">Подробнее</div></a>
        </div>

    </div>
</article>
<!-- End body -->
