<?php
function mostRecent(string $text): string
{
    $text = preg_replace('/[^a-zа-яё\s]/ui', '', mb_strtolower($text));

    $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

    if (empty($words)) {
        return "";
    }

    $counts = array_count_values($words);

    arsort($counts);

    return array_key_first($counts);
}

echo "Введите текст: ";
$input = trim(fgets(STDIN));

if (strlen($input) > 1000) {
    die("Текст не должен превышать 1000 символов");
}

$result = mostRecent($input);
echo "Самое частое слово: " . ($result ?: "не найдено");
