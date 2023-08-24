$previousSection = '';
foreach ($arResult['ITEMS'] as $ITEM) {
    $itemType = $ITEM['PROPERTIES']['TIP_IZDELIYA']['VALUE'];
    if ($itemType !== $previousSection) {
        $previousSection = $itemType;
        echo "<h2>$itemType</h2>";
    }
    $APPLICATION->IncludeComponent(
        'bitrix:catalog.item',
        'card',
        array(
            'RESULT' => array(
                'ITEM' => $ITEM,
                'TYPE' => 'CARD',
                'BIG_LABEL' => 'N',
                'BIG_DISCOUNT_PERCENT' => 'N',
                'BIG_BUTTONS' => 'N',
                'SCALABLE' => 'N'
            ),
            'PARAMS' => $generalParams
                + array('SKU_PROPS' => $arResult['SKU_PROPS'][$ITEM['IBLOCK_ID']])
        ),
        $component,
        array('HIDE_ICONS' => 'Y')
    );
}
