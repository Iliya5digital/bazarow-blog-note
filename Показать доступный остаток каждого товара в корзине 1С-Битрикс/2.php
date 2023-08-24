use Bitrix\Catalog\Model\Product;
$product = Product::getById($productId);

if ($product)
{
    // Действия с объектом $product
}
