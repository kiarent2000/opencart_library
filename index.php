<?php 
declare(strict_types=1);

spl_autoload_register(function ($class) {
    include __DIR__ . '/class/'.$class.'.php';
});

include(__DIR__.'/config.php');

##########################################################################
include('item.php');


$product_id=(new CheckProduct(778))->check(); //проверяем наличие продукта

if(!$product_id) // добавляем новый продук
{
    
    $item = new Item($test_item); // получаем экземляр класса единицы продукта
    echo "Добавляем новый продукт<br>";
    echo (new AddProduct())->add($item);

} else {    // обновляем существующий продукт
    echo "Обновляем продукт";
}








?>