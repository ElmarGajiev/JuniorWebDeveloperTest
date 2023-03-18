<?php
namespace delete;
class Book extends Data {
    public function __construct($sku) {
        $this->sku = $sku;
    }
    function delete() {
        return "DELETE FROM book WHERE sku = '".$this->sku."'";
    }
}