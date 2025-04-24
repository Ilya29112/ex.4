<?php
function isPerfectNumber(int $num): bool
{
    if ($num <= 1) {
        return false;
    }

    $sum = 1;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            $sum += $i;
            $otherDivisor = $num / $i;
            if ($otherDivisor !== $i) {
                $sum += $otherDivisor;
            }
        }
    }

    return $sum === $num;
}
function findPerfectNumbers(array $numbers): array
{
    $perfectNumbers = [];
    foreach ($numbers as $num) {
        if (isPerfectNumber($num)) {
            $perfectNumbers[] = $num;
        }
    }
    return $perfectNumbers;
}

echo "Введите числа через пробел: ";
$input = trim(fgets(STDIN));
$numbers = array_map('intval', explode(' ', $input));

$perfectNumbers = findPerfectNumbers($numbers);

if (empty($perfectNumbers)) {
    echo "В массиве нет идеальных чисел." . PHP_EOL;
} else {
    echo "Идеальные числа в массиве: " . implode(', ', $perfectNumbers) . PHP_EOL;
}
