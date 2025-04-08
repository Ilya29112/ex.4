<?php
function mostRecent($text)
{
    $words = explode(' ', strtolower($text));
    $counts = array_count_values($words);
    arsort($counts);
    return key($counts);
}

echo "Введите текст: ";
$text = trim(fgets(STDIN));
$mostFrequent = mostRecent($text);

echo "Самое частое слово: $mostFrequent\n";