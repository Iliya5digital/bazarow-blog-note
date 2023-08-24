use Bitrix\Catalog\PriceTable;

$prices = \CPrice::GetList([], [
    'PRODUCT_ID' => $arResult['ID']
]);

while ($price = $prices->Fetch()) {
    $arResult['ALL_PRICES'][] = $price;
}
