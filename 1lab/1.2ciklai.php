<?php
function apskaiciuotireiksmesintervale($start, $end) {
    $results = [];

    for ($i = $start; $i <= $end; $i++) {
        $number = $i;
        $maxValue = $number;
        $maxIterations = 0;

        while ($number != 1) {
            if ($number % 2 == 0) {
                $number = $number / 2;
            } else {
                $number = 3 * $number + 1;
            }

            $maxValue = max($maxValue, $number);
            $maxIterations++;
        }

        $results[] = [
            'skaicius' => $i,
            'didziausiaReiksme' => $maxValue,
            'didziausiaIteracija' => $maxIterations
        ];
    }

    return $results;
}

$start = 1;
$end = 10;
$intervalResults = apskaiciuotireiksmesintervale($start, $end);

echo "Skaiciu intervale rezultatai [$start, $end]:\n";
foreach ($intervalResults as $result) {
    echo "Skaicius: " . $result['skaicius'] . ", Didziausia Reiksme: " . $result['didziausiaReiksme'] . ", didziausia Iteracija: " . $result['didziausiaIteracija'] . "\n";
}