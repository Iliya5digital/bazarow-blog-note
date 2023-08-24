$allProductPrices = \Bitrix\Catalog\PriceTable::getList([
    "select" => ["*"],
    "filter" => [
        "=PRODUCT_ID" => $arResult['ID'],
    ],
])->fetchAll();

foreach ($allProductPrices as $allProductPrice) {
    $arResult['ALL_PRICES'][] = $allProductPrice;
}
