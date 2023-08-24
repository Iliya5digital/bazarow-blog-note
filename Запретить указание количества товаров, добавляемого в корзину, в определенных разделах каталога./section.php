$arResult['SECTION_ID'] = CIBlockFindTools::GetSectionID(
    $arResult['VARIABLES']['SECTION_ID'],
    $arResult['VARIABLES']['SECTION_CODE'],
    array(
        'IBLOCK_ID' => $arParams['IBLOCK_ID']
    )
);
$sectionResult = CIBlockSection::GetList(
    false,
    array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ID" => $arResult["SECTION_ID"]
    ),
    false,
    array(
        'ID',
        'UF_NOT_USE_PRODUCT_QUANTITY'
    )
);
while ($sectionProp = $sectionResult->GetNext()) {
    if ($sectionProp['UF_NOT_USE_PRODUCT_QUANTITY'] == 1) {
        $arParams['USE_PRODUCT_QUANTITY'] = 'N';
    }
}	
