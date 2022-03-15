<?
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", Array("IblockImportUpdate", "OnBeforeIBlockElementUpdateHandler"));
AddEventHandler("iblock", "OnBeforeIBlockSectionUpdate", Array("IblockImportUpdate", "OnBeforeIBlockSectionUpdateHandler"));

class IblockImportUpdate
{
    function OnBeforeIBlockElementUpdateHandler(&$arFields)
    {
        if(CModule::IncludeModule("iblock") && strlen($arFields["NAME"]) && $arFields['XML_ID']){
            $res = CIBlockElement::GetByID($arFields["ID"])->GetNext();
            $arFields["NAME"] = $res["NAME"];
        }
    }

    function OnBeforeIBlockSectionUpdateHandler(&$arFields)
    {
        if(CModule::IncludeModule("iblock") && strlen($arFields["NAME"]) && $arFields['XML_ID']){
            $res = CIBlockSection::GetByID($arFields["ID"])->GetNext();
            $arFields["NAME"] = $res["NAME"];
        }
    }
}
