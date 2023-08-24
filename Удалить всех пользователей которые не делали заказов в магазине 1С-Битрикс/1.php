CModule::IncludeModule('sale');
global $USER;

$rsUsers = CUser::GetList(
    ($by = "ID"),
    ($order = "desc"),
    false
);
while ($arUser = $rsUsers->Fetch()) {
    $dbOrders = CSaleOrder::GetList(
        false,
        array(
            'USER_ID' => $arUser['ID']
        )
        false,
        array (
            nTopCount => '1'
        )
    );
    while ($arOrder = $dbOrders->Fetch()){
        $userHasOrder = $arOrder['ID'];
    }
    if (!$userHasOrder) {
         CUser::Delete($arUser['ID']);
    }
    unset($userHasOrder);
}
