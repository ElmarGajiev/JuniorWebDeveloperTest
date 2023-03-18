<?php
namespace delete;
class DVD extends Data {
    public function __construct($sku) {
        $this->sku = $sku;
    }
    function delete() {
        return "DELETE FROM dvd WHERE sku = '".$this->sku."'";
    }
}