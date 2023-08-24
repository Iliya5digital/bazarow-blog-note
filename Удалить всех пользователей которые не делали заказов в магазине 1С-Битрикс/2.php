$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__) . '/../..');

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
define('BX_NO_ACCELERATOR_RESET', true);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

@set_time_limit(0);
@ignore_user_abort(true);

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
