<?php
function alphabeticalOrder(string $str): string
{
    $chars = str_split($str);
    sort($chars);
    return implode('', $chars);
}

echo "Введите строку для сортировки: ";
$input = trim(fgets(STDIN));

$result = alphabeticalOrder($input);
echo "Результат сортировки: " . $result . PHP_EOL;
