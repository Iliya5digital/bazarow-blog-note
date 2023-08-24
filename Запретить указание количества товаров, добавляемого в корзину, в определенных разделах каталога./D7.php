use Bitrix\Iblock\SectionTable;
use Bitrix\Main\Loader;

Loader::includeModule("iblock");

$sectionId = SectionTable::getList([
    'filter' => [
        '=IBLOCK_ID' => $arParams['IBLOCK_ID'],
        '=ID' => $arResult['VARIABLES']['SECTION_ID'],
        '=CODE' => $arResult['VARIABLES']['SECTION_CODE'],
    ],
    'select' => [
        'ID',
        'UF_NOT_USE_PRODUCT_QUANTITY'
    ]
])->fetch()['ID'];

if (!empty($sectionId)) {
    $sectionProps = SectionTable::getList([
        'filter' => [
            '=ID' => $sectionId,
            '=IBLOCK_ID' => $arParams['IBLOCK_ID'],
            '=UF_NOT_USE_PRODUCT_QUANTITY' => 1,
        ],
        'select' => [
            'ID',
            'UF_NOT_USE_PRODUCT_QUANTITY'
        ]
    ])->fetch();

    if (!empty($sectionProps) && $sectionProps['UF_NOT_USE_PRODUCT_QUANTITY'] == 1) {
        $arParams['USE_PRODUCT_QUANTITY'] = 'N';
    }
}
