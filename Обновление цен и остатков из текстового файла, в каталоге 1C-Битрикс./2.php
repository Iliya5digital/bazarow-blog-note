foreach ($arFileLines as $arFileLine) {
    $arItem = explode(' ', $arFileLine); // Разбираем каждую строку на массив
    var_dump($arItem)
}
