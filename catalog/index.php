<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Медицинское оборудование и товары заказать купить оптом и в розницу | Цены в каталоге | Доставка по всей России в любые населенные пункты | Интернет магазин VilMed");
$APPLICATION->SetPageProperty("description", "Купить медицинское оборудование и медтехнику,скидки, выгодные цены, оптом, в розницу, прямая поставка.☎ +7 (499) 113-02-79");
$APPLICATION->SetTitle("Каталог медицинского оборудования ");?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "24",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"PROPERTY_CODE_MOD" => array(
			0 => "",
			1 => "GUARANTEE",
			2 => "",
		),
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"USE_REVIEW" => "N",
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "",
		"SECTION_TOP_DEPTH" => "",
		"PAGE_ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "4",
		"ELEMENT_SORT_FIELD2" => "",
		"ELEMENT_SORT_ORDER2" => "",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ACTION_VARIABLE" => "",
		"PRODUCT_ID_VARIABLE" => "",
		"USE_PRODUCT_QUANTITY" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"ADD_PROPERTIES_TO_BASKET" => "",
		"PRODUCT_PROPS_VARIABLE" => "",
		"PARTIAL_PRODUCT_PROPERTIES" => "",
		"PRODUCT_PROPERTIES" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "",
		"USE_ALSO_BUY" => "N",
		"USE_GIFTS_DETAIL" => "Y",
		"USE_GIFTS_SECTION" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "",
		"GIFTS_SHOW_OLD_PRICE" => "",
		"GIFTS_SHOW_NAME" => "",
		"GIFTS_SHOW_IMAGE" => "",
		"GIFTS_MESS_BTN_BUY" => "",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"FILTER_FIELD_CODE" => "",
		"FILTER_PROPERTY_CODE" => "",
		"FILTER_OFFERS_FIELD_CODE" => "",
		"FILTER_OFFERS_PROPERTY_CODE" => "",
		"PATH_TO_SHIPPING" => "/delivery/",
		"DISPLAY_IMG_WIDTH" => "208",
		"DISPLAY_IMG_HEIGHT" => "178",
		"DISPLAY_DETAIL_IMG_WIDTH" => "390",
		"DISPLAY_DETAIL_IMG_HEIGHT" => "390",
		"DISPLAY_MORE_PHOTO_WIDTH" => "86",
		"DISPLAY_MORE_PHOTO_HEIGHT" => "86",
		"BUTTON_PAYMENTS_HREF" => "/payments/",
		"BUTTON_CREDIT_HREF" => "/credit/",
		"BUTTON_DELIVERY_HREF" => "/delivery/",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arrFilter",
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"IBLOCK_TYPE_REVIEWS" => "catalog",
		"IBLOCK_ID_REVIEWS" => "17",
		"USE_COMPARE" => "Y",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"COMPARE_PROPERTY_CODE" => array(
			0 => "NEWPRODUCT",
			1 => "DISCOUNT",
			2 => "CML2_ATTRIBUTES",
			3 => "SALELEADER",
			4 => "",
		),
		"COMPARE_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "PROP2",
			1 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3",
		),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"LIST_PROPERTY_CODE" => array(
			0 => "CHASTOTA_H_H",
			1 => "MAX_KR_MOM",
			2 => "NAPRAJ_AKKUM",
			3 => "VES_S_AKKUM",
		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3",
		),
		"LIST_OFFERS_LIMIT" => "",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "ARTNUMBER",
			1 => "MANUFACTURER",
			2 => "COUNTRY",
			3 => "CHASTOTA_H_H",
			4 => "MAX_KR_MOM",
			5 => "NAPRAJ_AKKUM",
			6 => "VES_S_AKKUM",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"SHOW_DEACTIVATED" => "N",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3",
		),
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => array(
		),
		"DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE" => array(
		),
		"USE_STORE" => "N",
		"STORES" => array(
			0 => "",
			1 => "1",
			2 => "2",
			3 => "",
		),
		"USE_MIN_AMOUNT" => "N",
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
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
		"SHOW_EMPTY_STORE" => "N",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"STORE_PATH" => "/store/#store_id#",
		"MAIN_TITLE" => "Наличие на складах",
		"OFFERS_SORT_FIELD" => "PRICE",
		"OFFERS_SORT_ORDER" => "desc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"USE_BIG_DATA" => "Y",
		"BIG_DATA_RCM_TYPE" => "any",
		"SHOW_FROM_SECTION" => "N",
		"PAGER_TEMPLATE" => "arrows",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"LAZY_LOAD" => "Y",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"LOAD_ON_SCROLL" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"FILE_404" => "",
		"COMPATIBLE_MODE" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"INSTANT_RELOAD" => "N",
		"1CB_USE_FILE_FIELD" => "Y",
		"1CB_FILE_FIELD_MULTIPLE" => "Y",
		"1CB_FILE_FIELD_MAX_COUNT" => "5",
		"1CB_FILE_FIELD_NAME" => "Реквизиты",
		"1CB_FILE_FIELD_TYPE" => "doc, docx, txt, rtf",
		"1CB_REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
			2 => "EMAIL",
		),
		"COUNT_REVIEW" => "5",
		"RELATED_PRODUCTS_SHOW" => "Y",
		"NUMBER_ACCESSORIES" => "8",
		"SEARCH_PAGE_RESULT_COUNT" => "900",
		"SEARCH_RESTART" => "N",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SEARCH_CHECK_DATES" => "Y",
		"USE_FILTER_SEO" => "Y",
		"USE_FILTER_SEO_IBLOCK_TYPE" => "seo",
		"USE_FILTER_SEO_IBLOCK" => "23",
		"SHOW_MAX_QUANTITY" => "N",
		"MESS_SHOW_MAX_QUANTITY" => "В наличии",
		"RELATIVE_QUANTITY_FACTOR" => "5",
		"MESS_RELATIVE_QUANTITY_MANY" => "много",
		"MESS_RELATIVE_QUANTITY_FEW" => "мало",
		"DROP_DOWN_LIST_PROP_FILTER" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare/",
			"smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		)
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>