<?php
namespace check;
class SKU extends Data {
    public function __construct($sku) {
        $this->sku = $sku;
    }
    function check() {
        return "SELECT sku FROM product_list WHERE sku = '$this->sku'";
    }
}