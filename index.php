<?php 
declare(strict_types=1);


spl_autoload_register(function ($class) {
    include __DIR__ . '/class/'.$class.'.php';
});


$test_item = array(
'model' => 'model',
'sku' => 'sku',
'upc' => 'upc',
'ean' => 'ean',
'jan' => 'jan',
'location' => 'location',
'quantity' => 7,
'stock_status_id' => 6,
'image' => 'my_image',
'manufacturer_id' => 1,
'price' => 500,
'product_category' => 412,

'product_images' => array('image1', 'image2', 'image3'),

'product_description' => array(
    1 => array(
    'language_id' => 1,
    'name' => 'name_rus',
    'description' => 'description_rus'
    ),
    2 => array(
        'language_id' => 3,
        'name' => 'name_ua',
        'description' => 'description_ua'
    )
),
);


print_r($test_item);

exit;

include('config.php');

$test = (new ItemFabrica())->create();

print_r($test);


?>