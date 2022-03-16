<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if(count($arResult) < 1)
	return;

global $arSetting;

$JS_HIDE = explode("\r\n", str_replace([' ', '.'], '', $arResult['PROPERTIES']['UF_DELETE_INDEX']));
?>

<ul class="left-menu">
	<?$previousLevel = 0;
	foreach($arResult as $arItem):
        $more = ($arItem["DEPTH_LEVEL"] == 2 && ($arSetting["CATALOG_VIEW"]["VALUE"] == "THREE_LEVELS" || $arSetting["CATALOG_VIEW"]["VALUE"] == "FOUR_LEVELS"));

		if($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):
			echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
		endif;
		if($arItem["IS_PARENT"]):?>
			<li class="parent<?if($arItem['SELECTED']):?> selected<?endif?>">
                <? if($more): ?>
                    <span class="more" onclick="$(this).toggleClass('open'); $(this).closest('.parent').find('.submenu').toggleClass('show');"></span>
                <? endif; ?>

                <? if(in_array($arItem["PARAMS"]["ID"], $JS_HIDE)): ?>
                    <a href="<?=$arItem['LINK']?>" data-text_script='<?=$arItem["TEXT"]?><?if($arSetting["CATALOG_LOCATION"]["VALUE"] == "LEFT"):?><span class="arrow"></span><?endif;?>'></a>
                <? else: ?>
                    <a href="<?=$arItem['LINK']?>"><?=$arItem["TEXT"]?><?if($arSetting["CATALOG_LOCATION"]["VALUE"] == "LEFT"):?><span class="arrow"></span><?endif;?></a>
                <? endif; ?>

				<?if($arSetting["CATALOG_LOCATION"]["VALUE"] == "HEADER"):?><span class="arrow"></span><?endif;?>
				<ul class="submenu">
		<?else:
			if($arItem["PERMISSION"] > "D"):?>
				<li<?if($arItem["SELECTED"]):?> class="selected"<?endif?>>
                    <? if(in_array($arItem["PARAMS"]["ID"], $JS_HIDE)): ?>
                        <a href="<?=$arItem['LINK']?>" data-text_script="<?=$arItem["TEXT"]?>"></a>
                    <? else: ?>
                        <a href="<?=$arItem['LINK']?>"><?=$arItem["TEXT"]?></a>
                    <? endif; ?>
				</li>
			<?endif;
		endif;
		$previousLevel = $arItem["DEPTH_LEVEL"];
	endforeach;
	if($previousLevel > 1):
		echo str_repeat("</ul></li>", ($previousLevel-1) );
	endif;?>
</ul>
<script type="text/javascript">
	//<![CDATA[
	$(function() {
		<?if($arSetting["CATALOG_LOCATION"]["VALUE"] == "HEADER"):?>
			$(".top-catalog ul.left-menu").moreMenu();
		<?endif;?>
		$("ul.left-menu").children(".parent").on({
			mouseenter: function() {
				<?if($arSetting["CATALOG_LOCATION"]["VALUE"] == "LEFT"):?>
					var pos = $(this).position(),
						dropdownMenu = $(this).children(".submenu"),
						dropdownMenuLeft = pos.left + $(this).width() + 9 + "px",
						dropdownMenuTop = pos.top - 5 + "px";
					if(pos.top + dropdownMenu.outerHeight() > $(window).height() + $(window).scrollTop() - 46) {
						dropdownMenuTop = pos.top - dropdownMenu.outerHeight() + $(this).outerHeight() + 5;
						dropdownMenuTop = (dropdownMenuTop < 0 ? $(window).scrollTop() : dropdownMenuTop) + "px";
					}
					dropdownMenu.css({"left": dropdownMenuLeft, "top": dropdownMenuTop ,"z-index" : "9999"});
					dropdownMenu.stop(true, true).delay(200).fadeIn(150);
				<?elseif($arSetting["CATALOG_LOCATION"]["VALUE"] == "HEADER"):?>
					var pos = $(this).position(),
						menu = $(this).closest(".left-menu"),
						dropdownMenu = $(this).children(".submenu"),
						dropdownMenuLeft = pos.left + "px",
						dropdownMenuTop = pos.top + $(this).height() + 13 + "px",
						arrow = $(this).children(".arrow"),
						arrowLeft = pos.left + ($(this).width() / 2) + "px",
						arrowTop = pos.top + $(this).height() + 3 + "px";
					if(menu.width() - pos.left < dropdownMenu.width()) {
						dropdownMenu.css({"left": "auto", "right": "10px", "top": dropdownMenuTop,"z-index" : "9999"});
						arrow.css({"left": arrowLeft, "top": arrowTop});
					} else {
						dropdownMenu.css({"left": dropdownMenuLeft, "right": "auto", "top": dropdownMenuTop, "z-index" : "9999"});
						arrow.css({"left": arrowLeft, "top": arrowTop});
					}
					dropdownMenu.stop(true, true).delay(200).fadeIn(150);
					arrow.stop(true, true).delay(200).fadeIn(150);
				<?endif;?>
			},
			mouseleave: function() {
				$(this).children(".submenu").stop(true, true).delay(200).fadeOut(150);
				<?if($arSetting["CATALOG_LOCATION"]["VALUE"] == "HEADER"):?>
					$(this).children(".arrow").stop(true, true).delay(200).fadeOut(150);
				<?endif;?>
			}
		});
	});
	//]]>
</script>
