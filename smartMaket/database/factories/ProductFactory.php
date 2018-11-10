<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        
        'category_id' => $fake -> category_id,
        'product_name' => $fake -> product_name,
        'picture' => $fake -> picture,,
        'unit_price' => $fake -> unit_price,
        'imported_date' => $fake -> imported_date,
        'expired_date' => $fake -> expired_date,
        'origin' => $fake -> origin,
        'imp_quantity' => $fake -> imp_quantity,
        'description' => $fake -> description,
        'in_stock' => $fake -> in_stock,
        'promotion_id' => $fake -> promotion_id,
        'slug' => $fake ->   slug,
        'create_at' => new Datetime,
        'update_at' => new Datetime,
    ];
});
