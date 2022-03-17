<?php
if(!$arParams['SECTION']['RECOMMENDED_LIST'])
    return false;

$arSection = $arParams['SECTION'];
$arParams = $arParams['PARAMS'];

$arParams['FILTER_NAME'] = 'recommended_list';
$arParams['PAGE_ELEMENT_COUNT'] = 100;
$arParams['TYPE'] = "";
$arParams['SECTION_ID'] = "";
$arParams['SECTION_CODE'] = "";

foreach ($arSection['RECOMMENDED_LIST'] as $el){
    $arSlider = explode('@', $el, 3);

    $jsonProduct = json_decode($arSlider[1], true);
    if($jsonProduct && $arSlider[2]){

        $arParams['DATA_INFO'] = $jsonProduct;
        $arParams['DATA_TITLE'] = $arSlider[0];
        $arParams['TYPE'] = $arSlider[2];

        $GLOBALS['recommended_list'] = ["ID" => array_keys($jsonProduct)];
        $APPLICATION->IncludeComponent("bitrix:catalog.section", "recommended",
            $arParams,
            false,
            array("HIDE_ICONS" => "Y")
        );
    }
}
?>


