<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

</main>

<footer>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="footer__title"><? area('footer_social_title') ?></h4>
                </div>
                <div class="col-12 footer__socials">
                    <? area('footer_social_icons') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12"><? area('footer_phone') ?></div>
                <div class="col-12"><? area('footer_email') ?></div>
                <div class="col-12"><? area('footer_address') ?></div>
                <div class="col-12"><? area('footer_address_2') ?></div>
            </div>
        </div>
    </section>
    <div class="phone"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/vektorBL.png" alt="phone"></div>
    <div class="phone__window">
        <a href="#bx24_call" onclick="vallesMobile.openB24Chat()"  class="phone__item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/fu1.svg" alt="img">Обратная связь</a>
        <a href="#whatsapp" target="_blank" class="phone__item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/fu2.svg" alt="img"> <span>Прислать список товаров в WhatsApp</span> </a>
        <a href="#bx24_question-answ" onclick="vallesMobile.openB24Chat()" class="phone__item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/fu3.svg" alt="img">Онлайн-чат</a>
        <a href="#bx24_order-call" onclick="vallesMobile.openB24Callback()" class="phone__item"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/fu4.svg" alt="img">Заказать звонок</a>
    </div>
    <div class="btntop"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/vektorBR.png" alt="phone"></div>
</footer>

<? if (!hasGooAgent()) {?>
    <section class="popup">
        <div class="container">
            <div>
                <div>
                    <h2 class="popup__head-title">Каталог</h2>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "main-menu",
                    Array(
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                        "COUNT_ELEMENTS" => "N",
                        "FILTER_NAME" => "",
                        "IBLOCK_ID" => "17",
                        "IBLOCK_TYPE" => "aspro_next_catalog",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("", ""),
                        "SECTION_ID" => "",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array("UF_CATALOG_ICON", ""),
                        "SHOW_PARENT_NAME" => "Y",
                        "TOP_DEPTH" => "4",
                        "VIEW_MODE" => "LIST"
                    )
                );?>
                <?/*
            <div class="col-12">
                <div class="popup__link-wrap">
                    <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample10" role="button" aria-expanded="false" aria-controls="multiCollapseExample10">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/plus/1.svg" alt=" icon">
                        Стройка
                    </a>
                </div>
                <div class="col-12 popup__2lvl collapse multi-collapse" id="multiCollapseExample10">
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом1</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом2</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом3</a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="popup__link-wrap">
                    <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample20" role="button" aria-expanded="false" aria-controls="multiCollapseExample20"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/plus/22.svg" alt=" icon">Инженерные системы</a>
                </div>
                <div class="col-12 popup__2lvl collapse multi-collapse" id="multiCollapseExample20">
                    <div class="popup__link-wrap">
                        <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample201" role="button" aria-expanded="false" aria-controls="multiCollapseExample201">Вентиляция и кондиционирование</a>
                    </div>
                    <div class="col-12 popup__3lvl collapse multi-collapse" id="multiCollapseExample201">
                        <div class="popup__link-wrap"><a href="#" class="popup__link">Краны, вентили, гибкие подводки</a></div>
                        <div class="popup__link-wrap"><a href="#" class="popup__link">Насосы</a></div>
                        <div class="popup__link-wrap"><a href="#" class="popup__link">Трубы</a></div>
                        <div class="popup__link-wrap"><a href="#" class="popup__link">Фильтры</a></div>
                        <div class="popup__link-wrap"><a href="#" class="popup__link">Фитинги</a></div>
                    </div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Водоотведение и дренажные системы</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Отопление</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Электроосвещение</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Электроснабжение</a></div>
                </div>
            </div>
            <div class="col-12 ">
                <div class="popup__link-wrap">
                    <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample30" role="button" aria-expanded="false" aria-controls="multiCollapseExample30"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/plus/23.svg" alt=" icon">Отделка</a>
                </div>
                <div class="col-12 popup__2lvl collapse multi-collapse" id="multiCollapseExample30">
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом1</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом2</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом3</a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="popup__link-wrap">
                    <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample40" role="button" aria-expanded="false" aria-controls="multiCollapseExample40"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/plus/11.svg" alt=" icon">Освещение</a>
                </div>
                <div class="col-12 popup__2lvl collapse multi-collapse" id="multiCollapseExample40">
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом1</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом2</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом3</a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="popup__link-wrap">
                    <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample50" role="button" aria-expanded="false" aria-controls="multiCollapseExample50"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/plus/20.svg" alt=" icon">Мебель</a>
                </div>
                <div class="col-12 popup__2lvl collapse multi-collapse" id="multiCollapseExample50">
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом1</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом2</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом3</a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="popup__link-wrap">
                    <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample60" role="button" aria-expanded="false" aria-controls="multiCollapseExample60"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/plus/9.svg" alt=" icon">Инуструмент</a>
                </div>
                <div class="col-12 popup__2lvl collapse multi-collapse" id="multiCollapseExample60">
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом1</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом2</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом3</a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="popup__link-wrap">
                    <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample70" role="button" aria-expanded="false" aria-controls="multiCollapseExample70"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/plus/13.svg" alt=" icon">Спецодежда</a>
                </div>

                <div class="col-12 popup__2lvl collapse multi-collapse" id="multiCollapseExample70">
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом1</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом2</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом3</a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="popup__link-wrap">
                    <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample80" role="button" aria-expanded="false" aria-controls="multiCollapseExample80"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/plus/24.svg" alt=" icon">Дача/сад</a>
                </div>
                <div class="col-12 popup__2lvl collapse multi-collapse" id="multiCollapseExample80">
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом1</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом2</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом3</a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="popup__link-wrap">
                    <a class="popup__link" data-toggle="collapse" href="#multiCollapseExample90" role="button" aria-expanded="false" aria-controls="multiCollapseExample90"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/plus/21.svg" alt=" icon">Акции</a>
                </div>
                <div class="col-12 popup__2lvl collapse multi-collapse" id="multiCollapseExample90">
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом1</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом2</a></div>
                    <div class="popup__link-wrap"><a href="#" class="popup__link">Дом3</a></div>
                </div>
            </div> */ ?>
            </div>
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "menu_popup",
                array(
                    "ADD_SECTIONS_CHAIN" => "N",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "COUNT_ELEMENTS" => "N",
                    "FILTER_NAME" => "",
                    "IBLOCK_ID" => "53",
                    "IBLOCK_TYPE" => "aspro_next_content",
                    "SECTION_CODE" => "",
                    "SECTION_FIELDS" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SECTION_ID" => "",
                    "SECTION_URL" => "",
                    "SECTION_USER_FIELDS" => array(
                        0 => "",
                        1 => "UF_POPULAR",
                        2 => "UF_ICON_POPULAR",
                        3 => "UF_POPULAR_CATEGORY",
                        4 => "",
                    ),
                    "SHOW_PARENT_NAME" => "Y",
                    "TOP_DEPTH" => "10",
                    "VIEW_MODE" => "LIST",
                    "COMPONENT_TEMPLATE" => "menu"
                ),
                false
            );?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <? area('footer_phone') ?>
                </div>
                <div class="col-12">
                    <? area('footer_email') ?>
                    <div class="col-12">
                        <? area('footer_address') ?>
                    </div>
                    <div class="col-12">
                        <? area('footer_address_2') ?>
                    </div>
                </div>
            </div>
    </section>
<?} ?>

</div>

<? if (!hasGooAgent()) {?>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Личный кабинет</h5>
                </div>
                <div class="modal-body">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        "mobile",
                        Array(
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "FORGOT_PASSWORD_URL" => "/auth/forgot-password/",
                            "PROFILE_URL" => "/personal/",
                            "REGISTER_URL" => "/auth/registration/",
                            "SHOW_ERRORS" => "N"
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>

    <script async src="<?=SITE_TEMPLATE_PATH?>/assets/build/js/script.min.js?v=dwjadakwd" type="text/javascript"></script>
    <script async src="<?=SITE_TEMPLATE_PATH?>/script.js?v=dwjadakwd" type="text/javascript"></script>

    <script>
        (function(w,d,u){
            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.ru/b7746147/crm/site_button/loader_2_bvixlm.js');

        setTimeout(function () {
            vallesMobile.renderB25WhatsApp()

            $('.b24-widget-button-block, .b24-widget-button-inner-mask').hide()
            $('.bx-livechat-control-btn-close').css('background', 'red')
            $(document).on('click', '.bx-livechat-control-btn-close', function () {
                alert()
            })
            $('.bx-livechat-control-box').click(function () {
                alert()
                //document.querySelectorAll('.b24-widget-button-inner-item').click()
            })

        }, 2000)
    </script>

<?} ?>

</body>
</html>
