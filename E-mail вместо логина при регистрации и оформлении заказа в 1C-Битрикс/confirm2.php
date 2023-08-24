use Bitrix\Main\UserTable;

if (!empty($arResult["ORDER"])) {
    $userId = $arResult["ORDER"]['USER_ID'];
    $userFields = UserTable::getList([
        'filter' => ['ID' => $userId],
        'select' => ['EMAIL']
    ])->fetch();

    $user = new \CUser;
    $user->Update($userId, [
        'EMAIL' => $userFields['EMAIL'],
        'LOGIN' => $userFields['EMAIL']
    ]);
}
