<?php
namespace App;

class StringHelper {

    public function toUpperCase($text) {
        return strtoupper($text);
    }

    public function toLowerCase($text) {
        return strtolower($text);
    }

    public function reverse($text) {
        return strrev($text);
    }

    public function length($text) {
        return strlen($text);
    }
}
