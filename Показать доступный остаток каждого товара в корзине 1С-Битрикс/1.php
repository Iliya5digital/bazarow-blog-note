$arProduct = CCatalogProduct::GetByID($rowData['PRODUCT_ID']);
$quantity = $arProduct['QUANTITY'];
$rowData['PRODUCT_QUANTITY'] = $quantity;
