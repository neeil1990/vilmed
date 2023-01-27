<?php
if(!$arParams['ELEMENT_ID'])
    return false;

$ElementID = $arParams['ELEMENT_ID'];

$db_old_groups = CIBlockElement::GetElementGroups($ElementID, true, ['NAME', 'CODE']);
?>

<style>
    .catalog-detail-section {
        margin-top: 12px;
    }
</style>

<? if($count = $db_old_groups->SelectedRowsCount()): ?>
    <div class="catalog-detail-section">
        <span>Категории: </span>
        <?
        $i = 1;
        while($ar_group = $db_old_groups->Fetch()): ?>
            <a href="/catalog/<?=$ar_group['CODE']?>/"><?=$ar_group['NAME']?></a> <?=($i < $count) ? "|" : null;?>
            <?
            $i++;
        endwhile; ?>
    </div>
<? endif; ?>
