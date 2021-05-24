<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if(count($arResult) < 1)
	return;

foreach($arResult as $key=> $arItem):
	$itemsNewName[$key] = $arItem;
	if($arItem["PARAMS"]["NAME_MENU"]){
		$itemsNewName[$key]["TEXT"] = $arItem["PARAMS"]["NAME_MENU"];
	}
endforeach;	

$arResult = $itemsNewName;

//

$onlyHidden = false;
$onlyHiddenLevel = 0;

foreach($arResult as $key=> $arItem):
	if($arItem["DEPTH_LEVEL"]<=$onlyHiddenLevel || $arItem["DEPTH_LEVEL"]==1){
		$onlyHiddenLevel = 0;
	}
	if($onlyHiddenLevel>0){
		continue;
	}	
	if($arItem["PARAMS"]["HIDDEN_ONLY"]){
		$onlyHiddenLevel = $arItem["DEPTH_LEVEL"];
		continue;
	}
	$itemsHidden[$key] = $arItem;
endforeach;	

$arResult = $itemsHidden;

//

$onlyOneLevel = false;

foreach($arResult as $key=> $arItem):
	if($arItem["DEPTH_LEVEL"]==1){
		$onlyOneLevel = false;
	}
	if($onlyOneLevel && $arItem["DEPTH_LEVEL"]>1){
		continue;
	}
	$itemsOne[$key] = $arItem;
	if($arItem["PARAMS"]["ONLY_ONE"]){
		$onlyOneLevel = true;
		$itemsOne[$key]["IS_PARENT"] = false;
	}

endforeach;	

$arResult = $itemsOne;


$onlyOneTwo = false;

foreach($arResult as $key=> $arItem):
	if($arItem["DEPTH_LEVEL"]==1){
		$onlyOneTwo = false;
	}

	if($onlyOneTwo && $arItem["DEPTH_LEVEL"]>2){
		continue;
	}
	$itemsOneTwo[$key] = $arItem;
	if($onlyOneTwo && $arItem["DEPTH_LEVEL"]==2){
		$itemsOneTwo[$key]["IS_PARENT"] = false;
	}
	if($arItem["PARAMS"]["ONE_TWO"]){
		$onlyOneTwo = true;
	}

endforeach;	

$arResult = $itemsOneTwo;

//SELECTED_ITEM//
if($arParams["CACHE_SELECTED_ITEMS"] != "Y") {

	$items = array();
	$selectedItem = false;
	foreach($itemsOne as $arItem) {
		$items[] = $arItem;		
		if($arItem["SELECTED"]) {
			$selectedItem = true;
			break;
		}
	}
	unset($arItem);
	
	if($selectedItem) {
		krsort($items);

		foreach($items as $arItem) {
			if($arItem["DEPTH_LEVEL"] == 1) {
				$arResult[$arItem["ITEM_INDEX"]]["SELECTED"] = true;
				break;
			}
		}
		unset($arItem, $items);
	}
	unset($selectedItem);
}?>