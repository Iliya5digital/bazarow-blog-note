<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if ($arResult['USER_IS_UNSUB'] === 'N') {?>
    <form method="post" action="">
        <input type="hidden" name="UNSUBSCRIBE" value="UNSUBSCRIBE"/>
        <button>
           Отписаться от рассылки
        </button>
    </form>
<?}else{?>
    У вас нет подписок
<?}?>
