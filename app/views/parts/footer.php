<?php
use svdsu\View;
/** @var $this View */
?>
<!-- Start footer -->
<footer>
    <div class="container footer">

        <div class="footerItem">
            <object data="<?= PATH ?>/assets/img/footerLogo.svg" type="image/svg+xml"></object>
        </div>

        <div class="footerItem">
            <ul class="ulFooter">
                <li class="liFooter"><a href="<?= PATH ?>" title="Главная страница">Главная</a></li>
                <li class="liFooter"><a href="<?= PATH ?>/news/" title="Новости предприятия">Новости</a></li>
                <li class="liFooter"><a href="" title="">Об управлении</a></li>
                <li class="liFooter"><a href="/page/documents" title="">Документы</a></li>
                <li class="liFooter"><a href="<?= PATH ?>/objects" title="">Наши объекты</a></li>
                <li class="liFooter"><a href="" title="">О нас</a></li>
            </ul>
        </div>

        <div class="footerItem">
            <div class="flexcol fflexcol">

                <div class="flexrow">
                    <div class="icoFooter"><object data="<?= PATH ?>/assets/img/icoMailFooter.svg" type="image/svg+xml"></object></div>
                    <div class="icoFooterText"><a href='&#109;&#97;il&#116;o&#58;%6E&#100;%&#55;3u-%3&#55;&#64;&#37;6Dail&#37;2E%&#55;2&#117;'>n&#100;su-7&#64;ma&#105;&#108;&#46;r&#117;</a></div>
                </div>

                <div class="flexrow">
                    <div class="icoFooter"><object data="<?= PATH ?>/assets/img/icoPhoneFooter.svg" type="image/svg+xml"></object></div>
                    <div class="icoFooterText">8 (38532) 5-70-94</div>
                </div>

                <div class="flexrow">
                    <div class="icoFooter"><object data="<?= PATH ?>/assets/img/icoHomeFooter.svg" type="image/svg+xml"></object></div>
                    <div class="icoFooterText">Алтайский край, г.Новоалтайск,
                        ул.Дорожная 7, 658083</div>
                </div>

            </div>
        </div>

    </div>
</footer>
</div>


<script>
    const PATH = '<?=PATH ?>';
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="<?= PATH ?>/assets/js/bootstrap.min.js"></script>
<!-- Top.Mail.Ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "3260838", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
        ts.src = "https://top-fwz1.mail.ru/js/code.js";
        var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
        if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "tmr-code");
</script>
<noscript><div><img src="https://top-fwz1.mail.ru/counter?id=3260838;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div></noscript>
<!-- /Top.Mail.Ru counter -->

</body>
</html>