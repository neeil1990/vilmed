<?php
if(empty($arParams['arResult']['VALUE_XML_ID']))
    return false;
?>

<div class="item-hide-image" style="font-size: 1.2em;">
    <div data-text_script="<?=($_REQUEST['view'] != 'price') ? $arParams['arResult']['NAME'] : "";?>"></div>
</div>



