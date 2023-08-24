$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__) . '/../../..');

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
define('BX_NO_ACCELERATOR_RESET', true);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

@set_time_limit(0);
@ignore_user_abort(true);

use Bitrix\Main\Loader;
Loader::includeModule('iblock');
Loader::includeModule('catalog');

$Update_Catalog = $_SERVER['DOCUMENT_ROOT'] . '/upload/txt_exchange/Update_Catalog.txt';

if (file_exists($Update_Catalog)) {
    $IBlockId = 1;
    $arFileLines = file($Update_Catalog, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    var_dump($arFileLines)
}
