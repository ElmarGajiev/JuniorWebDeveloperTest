<?php
namespace add;
class Book extends Data {
    public function __construct($sku, $type, $name, $price, $weight) {
        $this->sku = $sku;
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }
    function set() {
        return "Insert Into book (sku, type, name, price, weight)
                Values ('$this->sku', '$this->type', '$this->name', '$this->price', '$this->weight')";
    }
}