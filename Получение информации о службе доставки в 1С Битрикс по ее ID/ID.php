use Bitrix\Sale\Delivery\Services\Manager;

$deliveryServiceId = 123; // Замените на нужный ID службы доставки

$deliveryService = Manager::getObjectById($deliveryServiceId);
if ($deliveryService) {
    $deliveryName = $deliveryService->getName();
    $deliveryDescription = $deliveryService->getDescription();
    $deliveryLogo = CFile::GetPath($deliveryService->getlogotip());

    echo "Название службы доставки: " . $deliveryName . "<br>";
    echo "Описание службы доставки: " . $deliveryDescription . "<br>";
    echo "Путь к логотипу: " . $deliveryLogo . "<br>";
} else {
    echo "Служба доставки с ID " . $deliveryServiceId . " не найдена.";
}
