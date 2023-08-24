AddEventHandler("iblock", "OnAfterIBlockSectionAdd", "OnAfterIBlockSectionAddHandler");

function OnAfterIBlockSectionAddHandler(&$arFields)
{
    if ($arFields["IBLOCK_ID"] == 1) { // Замените 1 на ID нужного инфоблока
        $sectionListPropertyCode = "UF_V_CITY";
        $elementList = $arFields[$sectionListPropertyCode];

        foreach ($elementList as $elementID) {
            $elementName = ""; // Здесь будет храниться название элемента
            // Получите название элемента по его ID
            if (CModule::IncludeModule("iblock")) {
                $arElement = CIBlockElement::GetByID($elementID)->Fetch();
                if ($arElement) {
                    $elementName = $arElement["NAME"];
                }
            }

            if (!empty($elementName)) {
                $arNewSection = array(
                    "IBLOCK_ID" => $arFields["IBLOCK_ID"],
                    "IBLOCK_SECTION_ID" => $arFields["ID"],
                    "NAME" => $elementName,
                    "CODE" => CUtil::translit($elementName, "ru"), // Генерация кода на основе названия
                );

                $bs = new CIBlockSection();
                $newSectionID = $bs->Add($arNewSection);
            }
        }
    }
}
