<?php

function alphabeticalOrder($str)
{
    $letters = str_split($str);
    sort($letters);
    return implode($letters);
}

echo "Введите строку: ";
$userInput = trim(fgets(STDIN));

$sorted = alphabeticalOrder($userInput);
echo "Отсортированная строка: " . $sorted . "\n";