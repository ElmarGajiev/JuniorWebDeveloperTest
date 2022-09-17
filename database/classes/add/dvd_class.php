<?php
namespace add;
class DVD extends Data {
    public function __construct($sku, $type, $name, $price, $size) {
        $this->sku = $sku;
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
    }
    function set() {
        return "Insert Into dvd (sku, type, name, price, size)
                Values ('$this->sku', '$this->type', '$this->name', '$this->price', '$this->size')";
    }
}