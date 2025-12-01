<?php
namespace App;

class StringHelper {
    public function toUpperCase($string) {
        return strtoupper($string);
    }
    
    public function toLowerCase($string) {
        return strtolower($string);
    }
    
    public function reverseString($string) {
        return strrev($string);
    }
    
    public function countWords($string) {
        return str_word_count($string);
    }
}
?>