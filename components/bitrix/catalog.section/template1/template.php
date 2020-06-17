<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */
$this->setFrameMode(true);
?>
<div class="ajax-swiper-popular" style="overflow: hidden">
    <div class="swiper-wrapper">
        <?foreach ($arResult['ITEMS'] as $item){?>
            <div class="swiper-slide" style="margin-left: 10px;">
                <a href="<?=$item['DETAIL_PAGE_URL']?>" class="product__slide-link">
                    <div class="product__img-wrap">
                        <div class="b-product__picture" style="background-image:url('<?=$item['DETAIL_PICTURE']['SRC']?>')"></div>
                    </div>
                    <p class="product__text" style="margin-left: 20px;">
                        <?=$item['~NAME']?>
                    </p>
                    <p class="product__cost" style="margin-left: 20px; width: 100%;">
                        <?=$item['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?>
                        <?if($item['PRICES']['BASE']['DISCOUNT_VALUE']){?>
                            <span><?//=$item['PRICES']['BASE']['PRINT_VALUE']?></span>   <!--  Временно закомментировал до выяснения -->
                        <?}?>
                    </p>
                </a>
            </div>
        <?}?>
    </div>
</div>
<script>
    var swiper = new Swiper('.ajax-swiper-popular', {
        slidesPerView: 2,
        spaceBetween: 20,
        freeMode: true,
        slidesOffsetAfter: 560,
    });
</script>
