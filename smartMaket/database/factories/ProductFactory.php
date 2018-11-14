<?php

use Faker\Generator as Faker;
use App\Common\Constant;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    $min = 10000;
    $max = 1000000;
    $width = 720;
    $height = 960;
    $maxTime = 'now';
    $minTime = 'expired_date';
    $format = 'Y-m-d';
    $cateId = rand(1, 8);
    
    return [        
        'category_id' => $cateId,
        'product_name' => $faker->name,
        'picture' => $faker->imageUrl($width, $height, 'food', true, 'Faker', true),
        'unit_price' => $faker->randomFloat(null, $min, $max),
        'type' => renderType($cateId),
        'imported_date' => $faker->date($format, $maxTime),
        'expired_date' => $faker->date($format, $minTime),
        'origin' => $faker->countryCode, 
        'imp_quantity' => rand(1, 1000),
        'description' => $faker->text,
        'in_stock' => rand(0, 1000),
        'slug' => $faker->slug,
        //'create_at' => new unixTime($maxTime),
        //'update_at' => new unixTime($maxTime), 
    ];
});

function renderType($cateId)
{  
    
    if (in_array($cateId, [1,2,3,4,5,8])) return Constant::GRAM; // vd là id =1  tức là rau củ quả thì => return về gram

    if (in_array($cateId, [6,7])) return Constant::PACK;
   

}

