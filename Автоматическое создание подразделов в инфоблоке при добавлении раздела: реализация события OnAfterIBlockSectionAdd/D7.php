Код
<?php
use Bitrix\Main\EventManager;
use Bitrix\Main\Event;
use Bitrix\Main\Loader;
use Bitrix\Iblock\IblockTable;
use Bitrix\Iblock\SectionTable;

$eventManager = EventManager::getInstance();
$eventManager->addEventHandler('iblock', 'OnAfterIBlockSectionAdd', 'onAfterIBlockSectionAddHandler');

function onAfterIBlockSectionAddHandler(Event $event)
{
    $arFields = $event->getParameter("fields");
    $arResult = $event->getParameter("result");

    if ($arFields["IBLOCK_ID"] == 1) { // Замените 1 на ID нужного инфоблока
        $sectionList = array(
            array(
                "NAME" => "Подраздел 1",
                "CODE" => "pod_razdel_1",
            ),
            array(
                "NAME" => "Подраздел 2",
                "CODE" => "pod_razdel_2",
            ),
            // Добавьте остальные подразделы в список
        );

        foreach ($sectionList as $section) {
            $iblockId = $arFields["IBLOCK_ID"];
            $sectionId = $arResult["ID"];
            $name = $section["NAME"];
            $code = $section["CODE"];

            $result = SectionTable::add([
                "IBLOCK_ID" => $iblockId,
                "IBLOCK_SECTION_ID" => $sectionId,
                "NAME" => $name,
                "CODE" => $code,
            ]);

            if (!$result->isSuccess()) {
                // Обработка ошибки при создании подраздела
                // например, можно записать ошибку в лог или вывести сообщение об ошибке
                $errors = $result->getErrorMessages();
                echo "Ошибка при создании подраздела: " . implode(", ", $errors);
            }
        }
    }
}
?>
