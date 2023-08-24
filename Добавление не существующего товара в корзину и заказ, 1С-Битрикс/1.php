$pseudoId = rand(10000000000, 11000000000);
$arFields = array(
    "PRODUCT_ID" => $pseudoId,
    "PRODUCT_PRICE_ID" => '1',
    "PRICE" =>  '1000',
    "CURRENCY" => "RUB",
    "WEIGHT" => '',
    "QUANTITY" => 1,
    "LID" => LANG,
    "DELAY" => "N",
    "CAN_BUY" => "Y",
    "NAME" => "Абракадабра " . $pseudoId,
    "CALLBACK_FUNC" => "",
    "MODULE" => "",
    "NOTES" => "",
    "ORDER_CALLBACK_FUNC" => "",
    "DETAIL_PAGE_URL" => ""
);
$arProps = array();
$arFields["PROPS"] = $arProps;
CSaleBasket::Add($arFields);
