<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Интернет-магазин электроинструмента");
    global $arSetting;
if(in_array("CONTENT", $arSetting["HOME_PAGE"]["VALUE"])):?>
<h1 id="pagetitle">Интернет-магазин электроинструмента</h1>
<p>Наш магазин инструментов представлен такими мировыми брендами, как <a href="#">Makita</a>, <a href="#">Bosch</a>, <a href="#">Metabo</a>, <a href="#">DeWalt</a>, <a href="#">Sparky</a>, <a href="#">Kress</a>. Они давно успели заработать безупречную репутацию среди профессионалов ремонтных и строительных работ! Качество этих марок подтверждают многие промышленные гиганты, которые работают с ними уже не один десяток лет. Компания «Магазин инструментов» поставляет электроинструмент на условиях официального дилера большинства известных фирм-производителей техники. </p>
<h2>Электроинструмент высокого качества</h2>
<p>Качество этих марок подтверждают многие промышленные гиганты, которые работают с ними уже не один десяток лет. Компания «Магазин инструментов» поставляет электроинструмент на условиях официального дилера большинства известных фирм-производителей техники.</p>
<h2>Лучшие товары по лучшим ценам!</h2>
<p>Качество этих марок подтверждают многие промышленные гиганты, которые работают с ними уже не один десяток лет. Компания «Магазин инструментов» поставляет электроинструмент на условиях официального дилера большинства известных фирм-производителей техники.</p>
<?endif;
    //CANONICAL
    $pageUrl = $APPLICATION->GetCurPageParam();
    $query_str = parse_url($pageUrl);
    
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
    $protocol = 'https://';
    else
    $protocol = 'http://';
    
    parse_str($query_str['query'], $query_params);
    if(!empty($query_params)){
        $APPLICATION->AddHeadString("<link rel='canonical' href='".$protocol.$_SERVER['HTTP_HOST'].$query_str["path"]."'>");
    }
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>