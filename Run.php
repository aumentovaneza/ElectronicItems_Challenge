<?php
require_once('Items/Console.php');
require_once('Items/Television.php');
require_once('Items/Microwave.php');
require_once('Items/Controller.php');
require_once('ElectronicItems.php');

// Set variables
$playstation = new Console(1000);
$toshiba = new Television(1200);
$samsung = new Television(1500);
$microwave = new Microwave(500);
$wired1 = new Controller(300,true);
$wired2 = new Controller(300,true);
$remote1 = new Controller(400,false);
$remote2 = new Controller(400,false);
$remote3 = new Controller(250,false);
$remote4 = new Controller(250,false);
$remote5 = new Controller(250,false);
$playstationExtras = [$wired1, $wired2, $remote1, $remote2];
$toshibaExtras = [$remote3, $remote4];
$samsungExtras = [$remote5];
$totalPrice = 0;

// Set extras
foreach ($playstationExtras as $extra){
    $playstation->add_extra($extra);
}

foreach ($toshibaExtras as $extra){
    $toshiba->add_extra($extra);
}

foreach ($samsungExtras as $extra){
    $samsung->add_extra($extra);
}

$boughtItems = [
    $playstation->item(),
    $toshiba->item(),
    $samsung->item(),
    $microwave->item()
];

$electronicItems = new ElectronicItems($boughtItems);

$returnArray = [
    "total_price"   => $electronicItems->getAllTotal(),
    "sorted_items"  => $electronicItems->getSortedItems()
];
print_r("Price Total and Sorted Array: \n");
print_r($returnArray);
print_r("Console w/ remotes total cost: \n");
print_r($playstation->getTotal());
