<?php

$poem = file_get_contents('polnoe-esenin.txt') or die ("Unable to open date-input.txt");
$text = preg_replace('/\P{L}+/u', ' ', $poem);
$text = mb_strtolower($text,'UTF-8');
$words = [];
$allwords = mb_split(" ", $text);

for($i = 0; $i < count($allwords); $i++){
    if (array_key_exists($allwords[$i], $words)){
        $words[$allwords[$i]]++;
    } else {
        $words[$allwords[$i]] = 1;
    }
}

//array_pop($words);
$prePrint = json_encode($words, JSON_UNESCAPED_UNICODE);
echo str_replace(',', ',' . "\n", $prePrint);

?>
