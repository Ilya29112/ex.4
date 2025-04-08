<?php
function isPerfect($n)
{
    if ($n <= 1) return false;

    $sum = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i === 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}

echo "Проверка совершенных чисел\n";
echo "Введите число: ";
$num = (int)trim(fgets(STDIN));

if (isPerfect($num)) {
    echo "$num - совершенное число!\n";
} else {
    echo "$num - НЕ совершенное число\n";
}

echo "Примеры: 6, 28, 496, 8128\n";