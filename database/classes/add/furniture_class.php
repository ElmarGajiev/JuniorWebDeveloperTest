<?php
namespace add;
class Furniture extends Data {
    public function __construct($sku, $type, $name, $price, $height, $width, $length) {
        $this->sku = $sku;
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
    function set() {
        return "Insert Into furniture (sku, type, name, price, height, width, length)
                Values ('$this->sku', '$this->type', '$this->name', '$this->price', '$this->height', '$this->width', '$this->length')";
    }
}