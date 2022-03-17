<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);

if(empty($arParams['TYPE']))
    $arParams['TYPE'] = 'table';

$elementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
$elementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
$elementDeleteParams = array("CONFIRM" => GetMessage("CT_BCS_BIGDATA_TPL_ELEMENT_DELETE_CONFIRM"));

$id = $this->randString();
$obName = "ob".preg_replace("/[^a-zA-Z0-9_]/", "x", $this->GetEditAreaId($id));
$containerName = "container-".$id;

?>

<div class="recommended-items" data-entity="parent-container">

    <? if($arParams['DATA_TITLE']): ?>
        <div class="h3"><?=$arParams['DATA_TITLE']?></div>
    <? endif; ?>

	<div class="catalog-item-<?=$arParams['TYPE']?>-view" data-entity="<?=$containerName?>" style="margin-top: 0">
		<?if(!empty($arResult["ITEMS"])) {
			$areaIds = array();
			foreach($arResult["ITEMS"] as $item) {
				$uniqueId = $item["ID"]."_".md5($this->randString().$component->getAction());
				$areaIds[$item["ID"]] = $this->GetEditAreaId($uniqueId);
				$this->AddEditAction($uniqueId, $item["EDIT_LINK"], $elementEdit);
				$this->AddDeleteAction($uniqueId, $item["DELETE_LINK"], $elementDelete, $elementDeleteParams);
			}?>
			<!-- items-container -->
			<?foreach($arResult["ITEMS"] as $item) {

			    if($arParams["DATA_INFO"][$item['ID']][0])
                    $item["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"] = $arParams["DATA_INFO"][$item['ID']][0];

                if($arParams["DATA_INFO"][$item['ID']][1])
                    $item["PREVIEW_TEXT"] = $arParams["DATA_INFO"][$item['ID']][1];

				$APPLICATION->IncludeComponent("bitrix:catalog.item", "",
					array(
						"RESULT" => array(
							"ITEM" => $item,
							"AREA_ID" => $areaIds[$item["ID"]],
							"TYPE" => $arParams['TYPE']
						),
						"PARAMS" => $arResult["ORIGINAL_PARAMETERS"] + array("SETTING" => $arResult["SETTING"])
					),
					$component,
					array("HIDE_ICONS" => "Y")
				);
			}?>
			<!-- items-container -->
		<?}?>
	</div>
	<div class="clr"></div>
</div>
