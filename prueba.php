<?php 

require "vendor/autoload.php";

use App\User;
use Database\Model\ProductModel;

$user = new App\User();
echo $user->getName();

echo "\n";

$product = new ProductModel();
echo $product->getId();

?>