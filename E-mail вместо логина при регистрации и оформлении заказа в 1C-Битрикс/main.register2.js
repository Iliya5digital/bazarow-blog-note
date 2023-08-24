<? if ($FIELD !== 'LOGIN') { ?>
  <label>
   <?= GetMessage("REGISTER_FIELD_" . $FIELD) ?>:
   <? if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"): ?>
      <span>*</span>
   <? endif ?>
  </label>
<? } ?>
