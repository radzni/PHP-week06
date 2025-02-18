<?php
/**
 * Calculates the total price of items in a shopping cart.
 *
 * @param array $items List of items with 'price' values.
 * @return float Total price of all items.
 */
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

/**
 * Removes spaces from a string and converts it to lowercase.
 *
 * @param string $inputString Input string.
 * @return string Modified string.
 */
function formatString(string $inputString): string {
    $inputString = str_replace(' ', '', $inputString);
    return strtolower($inputString);
}

$string = "This is a poorly written program with little structure and readability.";
$modifiedString = formatString($string);
echo "\nModified string: " . $modifiedString;

/**
 * Checks whether a number is even or odd.
 *
 * @param int $number Input number.
 * @return string Message indicating even or odd.
 */
function checkEvenOrOdd(int $number): string {
    return ($number % 2 === 0) ? "\nThe number $number is even." : "\nThe number $number is odd.";
}

$number = 42;
echo checkEvenOrOdd($number);