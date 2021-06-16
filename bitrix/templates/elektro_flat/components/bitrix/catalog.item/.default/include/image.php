<?php
if(empty($arParams['arResult']['VALUE_XML_ID']))
    return false;
?>

<div class="item-hide-image">
    <div><?=($_REQUEST['view'] != 'price') ? $arParams['arResult']['NAME'] : "";?></div>
</div>



