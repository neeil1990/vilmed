<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Способы оплаты");?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"payments",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(),
		"SHOW_PARENT_NAME" => "",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => ""
	)
);?>
<p>
	 Для заказа Вы можете прислать список оборудования на почту: <a href="mailto:info@vilmed.ru">info@vilmed.ru</a>&nbsp;или самостоятельно сформировать заявку через сайт (добавляя товары в корзину).&nbsp;
</p>
<p>
	 Далее на электронную почту придет письмо с сформированным КП или счетом от нашего менеджера.
</p>
<br>
<p>
	 В случае оплаты счета без заключения индивидуального договора, вы соглашаетесь с условиями договора оферты: <a target="_blank" href="https://vilmed.ru/upload/oferta.pdf">https://vilmed.ru/upload/oferta.pdf</a> <br>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>