if (!empty($_REQUEST['offer'])) {
    $dbOfferData = CIBlockElement::GetList(
        false,
        array(
            '=ID' => $_REQUEST['offer']
        ),
        false,
        array(
            'nTopCount' => 1
        ),
        array(
            'NAME',
            'IBLOCK_ID',
            'CANONICAL_PAGE_URL'
        )
    )->GetNext();
    $dbOfferSeoProps = new \Bitrix\Iblock\InheritedProperty\ElementValues(
        $dbOfferData['IBLOCK_ID'], // ID инфоблока с ТП
        $_REQUEST['offer'] // ID элемента
    );
    $arOfferSeoProps = $dbOfferSeoProps->getValues();

    $APPLICATION->SetTitle($dbOfferData['NAME']);
    $APPLICATION->SetPageProperty("title", $arOfferSeoProps['ELEMENT_META_TITLE']);
    $APPLICATION->SetPageProperty("keywords", $arOfferSeoProps['ELEMENT_META_KEYWORDS']);
    $APPLICATION->SetPageProperty("description", $arOfferSeoProps['ELEMENT_META_DESCRIPTION']);
    $APPLICATION->SetPageProperty("canonical", $dbOfferData['CANONICAL_PAGE_URL']);
}
