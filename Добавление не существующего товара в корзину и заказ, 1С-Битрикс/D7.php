$item = $basket->createItem('catalog', rand(10000000000, 11000000000));
$item->setFields([
        'QUANTITY' => '1',
        'CURRENCY' => Bitrix\Currency\CurrencyManager::getBaseCurrency(),
        'LID' => Bitrix\Main\Context::getCurrent()->getSite(),
        'NAME' => 'Абракадабра',
        'PRICE' => '123456',
        'CUSTOM_PRICE' => 'Y',
]);
$basket->save();
