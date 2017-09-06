<?php

include_once 'vendor/autoload.php';

use Runroom\GildedRose\GildedRose;
use Runroom\GildedRose\Item;

$items = [
    new Item('+5 Dexterity Vest', 10, 20),
    new Item('Aged Brie', 2, 0),
    new Item('Elixir of the Mongoose', 5, 7),
    new Item('Sulfuras, Hand of Ragnaros', 0, 80),
    new Item('Sulfuras, Hand of Ragnaros', -1, 80),
    new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),
];

$gildedRose = new GildedRose($items);

$days = 2;

if (count($argv) > 1) {
    $days = (int) $argv[1];
}

for ($index = 0; $index < $days; $index++) {
    echo('-------- day ' . $index . ' --------' . PHP_EOL);
    echo('name, sellIn, quality' . PHP_EOL);

    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;

    $gildedRose->update_quality();
}
