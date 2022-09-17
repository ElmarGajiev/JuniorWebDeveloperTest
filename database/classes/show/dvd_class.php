<?php
namespace show;
class DVD extends Product {
    public function get() {
        return "Select * from dvd";
    }
}