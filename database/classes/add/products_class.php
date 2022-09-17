<?php
namespace add;
class Products extends Data {
    public function __construct($sku, $type) {
        $this->sku = $sku;
        $this->type = $type;
    }
    function set() {
        return "Insert Into product_list (sku,type)
                Values ('$this->sku', '$this->type')";
    }
}