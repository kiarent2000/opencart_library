<?php 
declare(strict_types=1);


spl_autoload_register(function ($class) {
    include __DIR__ . '/class/'.$class.'.php';
});





include('config.php');

$test = (new ItemFabrica())->create();

print_r($test);


?>