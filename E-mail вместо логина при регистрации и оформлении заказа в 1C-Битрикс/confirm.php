if (!empty($arResult["ORDER"])) {
    $USER_UPD = new CUser;
    $rsUser = CUser::GetByID($arResult["ORDER"]['USER_ID']);
    $arUser = $rsUser->Fetch();
    $fields = array(
        "EMAIL" => $arUser['EMAIL'],
        "LOGIN" => $arUser['EMAIL']
    );
    $USER_UPD->Update($arResult["ORDER"]['USER_ID'], $fields);
    // Здесь вся остальная логика confirm.php
}
