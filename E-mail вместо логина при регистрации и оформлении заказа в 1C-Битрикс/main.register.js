<? if ($FIELD == 'EMAIL') { ?>
  <input class="form-control" size="30" type="email" name="REGISTER[<?= $FIELD ?>]"
     onkeyup="document.getElementById('login-field').value = this.value"
     value="<?= $arResult["VALUES"][$FIELD] ?>"/>
<? } elseif ($FIELD == 'LOGIN') { // Скрываем поле LOGIN ?>
  <input id="login-field" size="30" type="hidden" name="REGISTER[<?= $FIELD ?>]"
     value="<?= $arResult["VALUES"][$FIELD] ?>"/>
<? } else { ?>
  <input class="form-control" size="30" type="text" name="REGISTER[<?= $FIELD ?>]"
     value="<?= $arResult["VALUES"][$FIELD] ?>"/>
<? } ?>
