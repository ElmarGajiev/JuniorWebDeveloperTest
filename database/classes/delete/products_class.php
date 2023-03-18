<?php
namespace delete;
class Products extends Data {
    public function __construct($sku) {
        $this->sku = $sku;
    }
    function delete() {
        return "DELETE FROM product_list WHERE sku = '".$this->sku."'";
    }
}