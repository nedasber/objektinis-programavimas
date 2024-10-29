<?php
function apskaiciuotireiksmesiriteracijos($number) {
    $maxValue = $number;
    $maxIterations = 0;

    while ($number != 1) {
        if ($number % 2 == 0) {
            $number = $number / 2;
        } else {
            $number = 3 * $number + 1;
        }

        echo $number . " ";
        $maxValue = max($maxValue, $number);
        $maxIterations++;
    }

    return [$maxValue, $maxIterations];
}

$number = 5;
echo "Starting number: " . $number . "\n";
$values = apskaiciuotireiksmesiriteracijos($number);
echo "\nPasiekta maksimali vertė: " . $values[0] . "\n";
echo "Maksimalios iteracijos: " . $values[1] . "\n";
