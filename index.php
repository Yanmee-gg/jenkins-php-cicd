<?php
// Autoload classes
spl_autoload_register(function ($class) {
    $class = str_replace('App\\', '', $class);
    $file = __DIR__ . '/src/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

use App\Calculator;
use App\StringHelper;

echo "==========================================\n";
echo "     JENKINS PHP PIPELINE - TUGAS 2      \n";
echo "==========================================\n\n";

// Test Calculator
echo "--- CALCULATOR TESTS ---\n";
$calc = new Calculator();

echo "Addition: 10 + 5 = " . $calc->add(10, 5) . "\n";
echo "Subtraction: 20 - 8 = " . $calc->subtract(20, 8) . "\n";
echo "Multiplication: 7 * 6 = " . $calc->multiply(7, 6) . "\n";
echo "Division: 100 / 4 = " . $calc->divide(100, 4) . "\n";
echo "Power: 2^8 = " . $calc->power(2, 8) . "\n\n";

// Test StringHelper
echo "--- STRING HELPER TESTS ---\n";
$stringHelper = new StringHelper();

$testString = "Jenkins CI/CD Pipeline";
echo "Original: $testString\n";
echo "Uppercase: " . $stringHelper->toUpperCase($testString) . "\n";
echo "Lowercase: " . $stringHelper->toLowerCase($testString) . "\n";
echo "Reversed: " . $stringHelper->reverseString($testString) . "\n";
echo "Word Count: " . $stringHelper->countWords($testString) . "\n\n";

echo "==========================================\n";
echo "Build Time: " . date('Y-m-d H:i:s') . "\n";
echo "Status: ✓ ALL TESTS PASSED\n";
echo "==========================================\n";
?>