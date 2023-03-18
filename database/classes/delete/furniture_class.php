<?php
namespace delete;
class Furniture extends Data {
    public function __construct($sku) {
        $this->sku = $sku;
    }
    function delete() {
        return "DELETE FROM furniture WHERE sku = '".$this->sku."'";
    }
}