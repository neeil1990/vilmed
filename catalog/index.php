<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Медицинское оборудование и товары заказать купить оптом и в розницу | Цены в каталоге | Доставка по всей России в любые населенные пункты | Интернет магазин VilMed");
$APPLICATION->SetPageProperty("description", "Купить медицинское оборудование и медтехнику,скидки, выгодные цены, оптом, в розницу, прямая поставка.☎ +7 (499) 113-02-79");
$APPLICATION->SetTitle("Каталог медицинского оборудования ");?>

<?
global $USER;
if ($USER->IsAdmin()){
	$file = str_replace('/','_',$APPLICATION->GetCurPage(false));
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . "/admin/description/". $file .".php", Array(), Array(
		"MODE"      => "html",
		"NAME"      => "заметки",
		"TEMPLATE"  => $file . ".php"
	));
}
?>

<?
$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	".default", 
	array(
		"BY_LINK" => "N",
		"1CB_FILE_FIELD_MAX_COUNT" => "5",
		"1CB_FILE_FIELD_MULTIPLE" => "Y",
		"1CB_FILE_FIELD_NAME" => "Реквизиты",
		"1CB_FILE_FIELD_TYPE" => "doc, docx, txt, rtf",
		"1CB_REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
			2 => "EMAIL",
		),
		"1CB_USE_FILE_FIELD" => "Y",
		"ACTION_VARIABLE" => "",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BASKET_URL" => "/personal/cart/",
		"BIG_DATA_RCM_TYPE" => "personal",
		"BUTTON_CREDIT_HREF" => "/credit/",
		"BUTTON_DELIVERY_HREF" => "/delivery/",
		"BUTTON_PAYMENTS_HREF" => "/payments/",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "Y",
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"COMPARE_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "PROP2",
			1 => "",
		),
		"COMPARE_PROPERTY_CODE" => array(
			0 => "NEWPRODUCT",
			1 => "DISCOUNT",
			2 => "CML2_ATTRIBUTES",
			3 => "SALELEADER",
			4 => "",
		),
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "N",
		"COUNT_REVIEW" => "5",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE" => array(
		),
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => array(
		),
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "ARTNUMBER",
			1 => "MANUFACTURER",
			2 => "COUNTRY",
			3 => "CHASTOTA_H_H",
			4 => "MAX_KR_MOM",
			5 => "NAPRAJ_AKKUM",
			6 => "VES_S_AKKUM",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DETAIL_IMG_HEIGHT" => "390",
		"DISPLAY_DETAIL_IMG_WIDTH" => "390",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"DISPLAY_IMG_HEIGHT" => "178",
		"DISPLAY_IMG_WIDTH" => "208",
		"DISPLAY_MORE_PHOTO_HEIGHT" => "86",
		"DISPLAY_MORE_PHOTO_WIDTH" => "86",
		"DISPLAY_TOP_PAGER" => "N",
		"DROP_DOWN_LIST_PROP_FILTER" => "",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FIELDS" => array(
			0 => "TITLE",
			1 => "ADDRESS",
			2 => "DESCRIPTION",
			3 => "PHONE",
			4 => "SCHEDULE",
			5 => "EMAIL",
			6 => "IMAGE_ID",
			7 => "COORDINATES",
			8 => "",
		),
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => "",
		"FILTER_NAME" => "arrFilter",
		"FILTER_OFFERS_FIELD_CODE" => "",
		"FILTER_OFFERS_PROPERTY_CODE" => "",
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"FILTER_PROPERTY_CODE" => "",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "",
		"GIFTS_MESS_BTN_BUY" => "",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "",
		"GIFTS_SHOW_IMAGE" => "",
		"GIFTS_SHOW_NAME" => "",
		"GIFTS_SHOW_OLD_PRICE" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "24",
		"IBLOCK_ID_REVIEWS" => "17",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_TYPE_REVIEWS" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"INSTANT_RELOAD" => "N",
		"LAZY_LOAD" => "Y",
		"LINE_ELEMENT_COUNT" => "4",
		"LINK_ELEMENTS_URL" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "UF_META_TITLE",
		"LIST_META_DESCRIPTION" => "UF_META_DESCRIPTION",
		"LIST_META_KEYWORDS" => "UF_META_KEYWORDS",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_LIMIT" => "",
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3",
		),
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"LIST_PROPERTY_CODE" => array(
			0 => "CHASTOTA_H_H",
			1 => "MAX_KR_MOM",
			2 => "NAPRAJ_AKKUM",
			3 => "VES_S_AKKUM",
		),
		"LOAD_ON_SCROLL" => "N",
		"MAIN_TITLE" => "Наличие на складах",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_RELATIVE_QUANTITY_FEW" => "мало",
		"MESS_RELATIVE_QUANTITY_MANY" => "много",
		"MESS_SHOW_MAX_QUANTITY" => "В наличии",
		"NUMBER_ACCESSORIES" => "8",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "arrows",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "40",
		"PARTIAL_PRODUCT_PROPERTIES" => "",
		"PATH_TO_SHIPPING" => "/delivery/",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "",
		"PRODUCT_PROPERTIES" => "",
		"PRODUCT_PROPS_VARIABLE" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE_MOD" => array(
			0 => "",
			1 => "GUARANTEE",
			2 => "",
		),
		"RELATED_PRODUCTS_SHOW" => "Y",
		"RELATIVE_QUANTITY_FACTOR" => "5",
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_PAGE_RESULT_COUNT" => "900",
		"SEARCH_RESTART" => "N",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "",
		"SEF_FOLDER" => "/catalog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_EMPTY_STORE" => "N",
		"SHOW_FROM_SECTION" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "N",
		"STORES" => array(
			0 => "",
			1 => "1",
			2 => "2",
			3 => "",
		),
		"STORE_PATH" => "/store/#store_id#",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"USE_ALSO_BUY" => "N",
		"USE_BIG_DATA" => "Y",
		"USE_COMPARE" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"USE_FILTER_SEO" => "Y",
		"USE_FILTER_SEO_IBLOCK" => "23",
		"USE_FILTER_SEO_IBLOCK_TYPE" => "seo",
		"USE_GIFTS_DETAIL" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"USE_GIFTS_SECTION" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"USE_MIN_AMOUNT" => "N",
		"USE_PRICE_COUNT" => "Y",
		"USE_PRODUCT_QUANTITY" => "",
		"USE_REVIEW" => "N",
		"USE_STORE" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare/",
			"smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
