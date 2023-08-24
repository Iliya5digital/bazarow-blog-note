// result_modifier.php =======================
$allProductPrices = \Bitrix\Catalog\PriceTable::getList([
    "select" => [
    	"PRICE" // Нужна только цена
    ],
    "filter" => [
        "=PRODUCT_ID" => $arResult['ID'],
    ],
    "order" => [
            "PRICE" => "DESC" // Сортируем по уменьшению цены
    ]
])->fetchAll();

foreach ($allProductPrices as $allProductPrice) {
    $arResult['ALL_PRICES'][] = $allProductPrice;
}

// template.php ===============================
// Старая зачеркнутая цена
echo $arResult['ALL_PRICES']['0']['PRICE'];

// Цена покупки
echo $arResult['ALL_PRICES']['1']['PRICE'];

// Расчет процента (для вывода в лейбле, можно округлить с float)
echo $arResult['ALL_PRICES']['1']['PRICE'] * 100 / $arResult['ALL_PRICES']['0']['PRICE'];
