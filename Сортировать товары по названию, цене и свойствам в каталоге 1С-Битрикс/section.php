<form class="sortline" method="post" action="/local/ajax/sort.php">
  Сортировать по:
  <select name="sortten">
    <option value="show_counter"<? echo $_COOKIE['sortten'] === 'show_counter' ? ' selected' : ' '; ?>>
      Просмотрам
    </option>
    <option value="name"<? echo $_COOKIE['sortten'] === 'name' ? ' selected' : ' '; ?>>
      Алфавиту
    </option>
    <option value="SCALED_PRICE_2"<? echo $_COOKIE['sortten'] === 'SCALED_PRICE_2' ? ' selected' : ' '; ?>>
      Цене
    </option>
    <option value="property_BRANDS_REF"<? echo $_COOKIE['sortten'] === 'property_BRANDS_REF' ? ' selected' : ' '; ?>>
      Производителям
    </option>
  </select>
</form>
