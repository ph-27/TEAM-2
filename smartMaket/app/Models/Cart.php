<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $item = null;
    public $totalQty = 0;
    public $totalAmount;

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalAmount = $oldCart->totalAmount;
        }
    }

    public function add($item, $id){
        $cart = ['quantity'=>0, 'price' => $item->unit_price, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $cart = $this->items[$id];
            }
        }
        $cart['quantity']++;
        $cart['price'] = $item->unit_price * $cart['quantity'];
        $this->items[$id] = $cart;
        $this->totalQty++;
        $this->totalAmount += $item->unit_price;
    }

    public function deleteOne($id){
        $this->items[$id]['quantity']--;
        $this->items[$id]['price'] -= $this->items[$id]['price'];
        $this->totalQty--;
        $this->totalAmount -= $this->items[$id]['item']['price'];
        if($this->items[$id]['quantity']<=0){
            unset($this->items[$id]);
        }
    }

    public function deleteAll($id){
        $this->totalQty -= $this->items[$id]['quantity'];
        $this->totalAmount -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
