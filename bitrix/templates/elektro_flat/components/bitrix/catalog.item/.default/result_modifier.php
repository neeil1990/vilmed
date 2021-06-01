<?php
if($arResult['ITEM']){
	$arResult['ITEM']['NAME'] = html_entity_decode($arResult['ITEM']['NAME']);
	$arResult['ITEM']["PROPERTIES"]["ARTNUMBER"]["VALUE"] = ($arResult['ITEM']["PROPERTIES"]["ARTNUMBER"]["VALUE"]) ?: $arResult['ITEM']["PROPERTIES"]["CML2_ARTICLE"]["VALUE"];
}

