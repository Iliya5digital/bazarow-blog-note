use Bitrix\Sale;
foreach ($arResult["PROFILES"] as $val) {
    $profileData = Sale\OrderUserProperties::getProfileValues(
        (int)$val['ID']
    );
    echo $val['NAME'] . '';
    foreach ($profileData as $k => $property) {
        $db_props = CSaleOrderProps::GetList(
            array("SORT" => "ASC"),
            array(
                "ID" => $k
            ),
            false,
            false,
            array()
        );
        if ($props = $db_props->Fetch()) {
            echo $props["NAME"] . '';
            echo $property;
        }
    }
}
