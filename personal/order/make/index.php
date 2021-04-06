<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Оформление заказа");

$flag = true;

use Bitrix\Sale,
    Bitrix\Sale\Basket;

Bitrix\Main\Loader::includeModule("sale");
Bitrix\Main\Loader::includeModule("catalog");

$price = \Bitrix\Sale\BasketComponentHelper::getFUserBasketPrice(Sale\Fuser::getId(),Bitrix\Main\Context::getCurrent()->getSite());

if(!empty($arSetting["ORDER_MIN_PRICE"]["VALUE"])){
    $pageUrl = $APPLICATION->GetCurPageParam();
    $query_str = parse_url($pageUrl, PHP_URL_QUERY);
    parse_str($query_str, $query_params);
    
    if ($price > $arSetting["ORDER_MIN_PRICE"]["VALUE"])
        $flag = true;
    else
        $flag = false;
    
    if (array_key_exists('ORDER_ID', $query_params))
        $flag = true;
    
    
}?>
<?if($flag){?>
    <? $APPLICATION->IncludeComponent(
	"bitrix:sale.order.ajax", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PAY_FROM_ACCOUNT" => "N",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"ALLOW_AUTO_REGISTER" => "N",
		"SEND_NEW_USER_NOTIFY" => "Y",
		"DELIVERY_NO_AJAX" => "N",
		"SHOW_NOT_CALCULATED_DELIVERIES" => "L",
		"DELIVERY_NO_SESSION" => "Y",
		"TEMPLATE_LOCATION" => "popup",
		"DELIVERY_TO_PAYSYSTEM" => "d2p",
		"USE_PREPAYMENT" => "N",
		"COMPATIBLE_MODE" => "Y",
		"USE_PRELOAD" => "Y",
		"ALLOW_USER_PROFILES" => "Y",
		"ALLOW_NEW_PROFILE" => "Y",
		"SHOW_ORDER_BUTTON" => "final_step",
		"SHOW_TOTAL_ORDER_BUTTON" => "N",
		"SHOW_PAY_SYSTEM_LIST_NAMES" => "Y",
		"SHOW_PAY_SYSTEM_INFO_NAME" => "Y",
		"SHOW_DELIVERY_LIST_NAMES" => "Y",
		"SHOW_DELIVERY_INFO_NAME" => "Y",
		"SHOW_DELIVERY_PARENT_NAMES" => "Y",
		"SHOW_STORES_IMAGES" => "Y",
		"SKIP_USELESS_BLOCK" => "Y",
		"BASKET_POSITION" => "before",
		"SHOW_BASKET_HEADERS" => "N",
		"DELIVERY_FADE_EXTRA_SERVICES" => "Y",
		"SHOW_COUPONS_BASKET" => "N",
		"SHOW_COUPONS_DELIVERY" => "N",
		"SHOW_COUPONS_PAY_SYSTEM" => "N",
		"SHOW_NEAREST_PICKUP" => "Y",
		"DELIVERIES_PER_PAGE" => "160",
		"PAY_SYSTEMS_PER_PAGE" => "160",
		"PICKUPS_PER_PAGE" => "160",
		"SHOW_MAP_IN_PROPS" => "N",
		"PROPS_FADE_LIST_1" => array(
			0 => "1",
			1 => "2",
			2 => "3",
		),
		"PROPS_FADE_LIST_2" => array(
			0 => "8",
			1 => "12",
			2 => "13",
			3 => "14",
		),
		"ACTION_VARIABLE" => "action",
		"PATH_TO_BASKET" => "/personal/cart/",
		"PATH_TO_PERSONAL" => "/personal/orders/",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"PATH_TO_AUTH" => "/personal/private/",
		"SET_TITLE" => "Y",
		"DISABLE_BASKET_REDIRECT" => "N",
		"PRODUCT_COLUMNS_VISIBLE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "PROPS",
			2 => "DISCOUNT_PRICE_PERCENT_FORMATED",
			3 => "PRICE_FORMATED",
		),
		"ADDITIONAL_PICT_PROP_15" => "-",
		"BASKET_IMAGES_SCALING" => "standard",
		"SERVICES_IMAGES_SCALING" => "standard",
		"USE_YM_GOALS" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_CUSTOM_MAIN_MESSAGES" => "Y",
		"USE_CUSTOM_ADDITIONAL_MESSAGES" => "Y",
		"USE_CUSTOM_ERROR_MESSAGES" => "N",
		"TEMPLATE_THEME" => "site",
		"PRODUCT_COLUMNS_HIDDEN" => "",
		"ALLOW_APPEND_ORDER" => "Y",
		"SPOT_LOCATION_BY_GEOIP" => "Y",
		"SHOW_VAT_PRICE" => "Y",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"EMPTY_BASKET_HINT_PATH" => "/",
		"USE_PHONE_NORMALIZATION" => "Y",
		"ADDITIONAL_PICT_PROP_16" => "-",
		"ADDITIONAL_PICT_PROP_24" => "-",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"MESS_AUTH_BLOCK_NAME" => "Авторизация",
		"MESS_REG_BLOCK_NAME" => "Регистрация",
		"MESS_BASKET_BLOCK_NAME" => "Товары в заказе",
		"MESS_REGION_BLOCK_NAME" => "Регион доставки",
		"MESS_PAYMENT_BLOCK_NAME" => "Оплата",
		"MESS_DELIVERY_BLOCK_NAME" => "Доставка",
		"MESS_BUYER_BLOCK_NAME" => "Покупатель",
		"MESS_BACK" => "Назад",
		"MESS_FURTHER" => "Далее",
		"MESS_EDIT" => "изменить",
		"MESS_ORDER" => "Оформить заказ",
		"MESS_PRICE" => "Стоимость",
		"MESS_PERIOD" => "Срок доставки",
		"MESS_NAV_BACK" => "Назад",
		"MESS_NAV_FORWARD" => "Вперед",
		"MESS_REGISTRATION_REFERENCE" => "Если вы впервые на сайте, и хотите что бы мы вас помнили и все ваши заказы сохранялись, заполните регистрационную форму.",
		"MESS_AUTH_REFERENCE_1" => "Символом \"звездочка\" (*) отмечены обязательные для заполнения поля.",
		"MESS_AUTH_REFERENCE_2" => "После регистрации вы получите информационное письмо.",
		"MESS_AUTH_REFERENCE_3" => "Личные сведения, полученные в распоряжение интернет-магазина при регистрации или каким-либо иным образом, не будут без разрешения пользователей передаваться третьим организациям и лицам за исключением ситуаций, когда этого требует закон или судебное решение.",
		"MESS_ADDITIONAL_PROPS" => "Дополнительные свойства",
		"MESS_USE_COUPON" => "Применить купон",
		"MESS_COUPON" => "Купон",
		"MESS_PERSON_TYPE" => "Тип плательщика",
		"MESS_SELECT_PROFILE" => "Выберите профиль",
		"MESS_REGION_REFERENCE" => "Выберите свой город в списке. Если вы не нашли свой город, выберите \"другое местоположение\", а город впишите в поле \"Город\"",
		"MESS_PICKUP_LIST" => "Пункты самовывоза:",
		"MESS_NEAREST_PICKUP_LIST" => "Ближайшие пункты:",
		"MESS_SELECT_PICKUP" => "Выбрать",
		"MESS_INNER_PS_BALANCE" => "На вашем пользовательском счете:",
		"MESS_ORDER_DESC" => "Комментарии к заказу:"
	),
	false
);

}else{ ?>
    <div id="min_price_message" class="alertMsg info ">
        <i class="fa fa-info"></i>
        <span class="text"><?= GetMessage('ORDER_MIN_PRICE_VALUE') ?><?= CurrencyFormat($arSetting["ORDER_MIN_PRICE"]["VALUE"], Bitrix\Currency\CurrencyManager::getBaseCurrency()) ?></span>
    </div>
<?}?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>