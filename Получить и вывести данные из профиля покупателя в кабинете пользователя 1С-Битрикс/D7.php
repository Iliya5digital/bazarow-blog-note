use Bitrix\Sale\OrderUserProperties;
use Bitrix\Sale\PropertyValueCollection;

foreach ($arResult["PROFILES"] as $val) {
    $profileData = OrderUserProperties::getProfileValues((int)$val['ID']);
    echo $val['NAME'] . '<br>';
    foreach ($profileData as $k => $property) {
        $props = PropertyValueCollection::create(CSaleOrderProps::class)->getItemByValueId($k);
        if ($props) {
            echo $props->getName() . '<br>';
            echo $property;
        }
    }
}
