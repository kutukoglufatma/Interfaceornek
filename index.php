<?php
include './Models/DigitalProduct.php';
include './Models/PhysicalProduct.php';
include './Models/Basket.php';
include './Interfaces/Downloadable.php';
include './Interfaces/Shippable.php';
include_once './Models/Product.php';
include_once './Models/Person.php';

$product1 =new DigitalProduct('Medium',100,'https://medium.com/@kutukoglufatma');
$product2 =new PhysicalProduct('Computer',1000,2000);

$person = new Person("Fatma","Kütükoğlu","istanbul yolu etimesgut Ankara","fatma@hotmail.com");

$basket = new Basket($person);
$basket->addProduct($product1);
$basket->addProduct($product2);
$basket->verify();

$person->sendMail($person->getMail());

echo 'deneme';



