AddEventHandler("iblock", "OnAfterIBlockSectionAdd", "OnAfterIBlockSectionAddHandler");

function OnAfterIBlockSectionAddHandler(&$arFields)
{
    if ($arFields["IBLOCK_ID"] == 1) { // Замените 1 на ID нужного инфоблока
        $sectionList = array(
            array(
                "NAME" => "Подраздел 1",
                "CODE" => "pod_razdel_1",
            ),
            array(
                "NAME" => "Подраздел 2",
                "CODE" => "pod_razdel_2",
            ),
            // Добавьте остальные подразделы в список
        );

        foreach ($sectionList as $section) {
            $arNewSection = array(
                "IBLOCK_ID" => $arFields["IBLOCK_ID"],
                "IBLOCK_SECTION_ID" => $arFields["ID"],
                "NAME" => $section["NAME"],
                "CODE" => $section["CODE"],
            );
            $bs = new CIBlockSection();
            $newSectionID = $bs->Add($arNewSection);
        }
    }
}
