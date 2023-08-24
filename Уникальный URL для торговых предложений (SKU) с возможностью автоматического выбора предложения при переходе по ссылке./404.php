include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');
$currentPath = GetPagePath();
$arUrl = explode('/', $currentPath);
// Находим инфоблок предложений
$dbIBlock = CIBlock::GetList(
    false,
    array(
        "TYPE" => "offers",
        "SITE_ID" => SITE_ID,
    )
);
if ($arIBlock = $dbIBlock->GetNext()) {
    $offersIblocId = $arIBlock['ID'];
}
// Проходим по предложениям в посках ID из url
$dbOffers = CIBlockElement::GetList(
    false,
    array(
        'IBLOCK_ID' => $offersIblocId
    ),
    false,
    false,
    array('ID')
);
while ($arOffers = $dbOffers->Fetch()) {
    if (in_array($arOffers['ID'], $arUrl)) {
        $removePath = $arOffers['ID'] . '/';
        $urlWithoutOfferId = str_replace($removePath, '', $currentPath);
        LocalRedirect($urlWithoutOfferId . '?TARGET_OFFER=' . $arOffers['ID']); // отправляем в товар
        exit;
    }
}

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
define("HIDE_SIDEBAR", true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");

//  !!!!! Тут ваша красивая 404 ошибка каталога

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
