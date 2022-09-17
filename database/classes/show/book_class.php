<?php
namespace show;
class Book extends Product {
    public function get() {
        return "Select * from book";
    }
}