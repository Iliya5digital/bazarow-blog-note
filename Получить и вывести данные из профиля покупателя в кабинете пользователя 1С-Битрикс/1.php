use Bitrix\Sale;
foreach ($arResult["PROFILES"] as $val) {
    $profileData = Sale\OrderUserProperties::getProfileValues(
            (int)$val['ID']
    );
    print_r($profileData);
}
