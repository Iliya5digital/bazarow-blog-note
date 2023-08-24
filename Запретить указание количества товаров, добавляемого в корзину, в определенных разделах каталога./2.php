$sectionResult = CIBlockSection::GetList(
    false,
    array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ID" => $arResult["SECTION_ID"]
    ),
    false,
    array(
        'ID',
        'UF_*'
    )
);
while ($sectionProp = $sectionResult->GetNext()) {
   print_r($sectionProp);
}   
