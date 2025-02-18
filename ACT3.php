<?php
$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];

$i = 0;

echo "Even numbers in the matrix:<br>";

while ($i < count($matrix)) {
    $j = 0;
    while ($j < count($matrix[$i])) {
        if ($matrix[$i][$j] % 2 == 0) {
            echo $matrix[$i][$j] . " ";
        }
        $j++;
    }
    $i++;
}
?>
