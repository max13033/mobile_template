<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<div class="ajax-swiper" style="overflow:hidden;">
    <div class="swiper-wrapper">
        <? foreach ($arResult['SECTIONS'] as $SECTION) {
            $img = isset($SECTION['UF_ICON_POPULAR']) ? CFile::GetPath($SECTION['UF_ICON_POPULAR']) : SITE_TEMPLATE_PATH . '/assets/build/img/po9.svg' ;
            ?>
            <div class="swiper-slide" style="margin-left:10px; margin-right:10px;">
                <a href="<?=$SECTION['SECTION_PAGE_URL']?>" class="popular__link-wrap">
                    <img src="<?=$img?>" data-id="<?=$SECTION['ID']?>" alt="<?=$SECTION['NAME']?>" class="popular__img">
                    <p class="popular__text"><?=$SECTION['~NAME']?></p>
                </a>
            </div>
        <?}?>
    </div>
</div>

<script>
    var swiper = new Swiper('.ajax-swiper', {
        slidesPerView: 4,
        spaceBetween: 10,
        freeMode: true,
        slidesOffsetAfter: 100,
    });
</script>