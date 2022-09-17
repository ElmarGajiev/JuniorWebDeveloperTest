<?php
namespace show;
class Furniture extends Product {
    public function get() {
        return "Select * from furniture";
    }
}