if (empty($_REQUEST['offer'])) {
    $arParams['SET_TITLE'] = $arParams['SET_TITLE'];
    $arParams['SET_BROWSER_TITLE'] = $arParams['SET_BROWSER_TITLE'];
    $arParams['SET_META_KEYWORDS'] = $arParams['SET_META_KEYWORDS'];
    $arParams['SET_META_DESCRIPTION'] = $arParams['SET_META_DESCRIPTION'];
} else {
    $arParams['SET_TITLE'] = 'N';
    $arParams['SET_BROWSER_TITLE'] = 'N';
    $arParams['SET_META_KEYWORDS'] = 'N';
    $arParams['SET_META_DESCRIPTION'] = 'N';
}
