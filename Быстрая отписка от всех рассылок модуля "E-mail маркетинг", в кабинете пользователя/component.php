if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

Loader::includeModule('sender');

global $USER;

if ($USER->IsAuthorized()) {
    $rsUser = CUser::GetByID($USER->GetID());
    $arUser = $rsUser->Fetch();
    
    $subscriptionDb = \Bitrix\Sender\MailingSubscriptionTable::getSubscriptionList(array(
        'select' => array('IS_UNSUB'),
        'filter' => array(
            '=CONTACT.CODE' => $arUser['EMAIL'],
        ),
    ));
    while (($subscription = $subscriptionDb->fetch())) {
        $arResult['USER_IS_UNSUB'] = $subscription['IS_UNSUB'];
    }

    if ($_POST['UNSUBSCRIBE'] === 'UNSUBSCRIBE') {
        $contact_id = \Bitrix\Sender\ContactTable::addIfNotExist(
            array(
                'EMAIL' => $arUser['EMAIL']
            )
        );
        $contact = new \Bitrix\Sender\Entity\Contact($contact_id);

        $subList = $contact->loadData($contact_id);
        $subList = $subList['SUB_LIST'];
        foreach ($subList as $item) {
            $contact->unsubscribe($item);
        }
    }
} else {
    LocalRedirect('/');
}

$this->IncludeComponentTemplate();
