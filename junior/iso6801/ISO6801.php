<?php

$input = fopen(realpath("date-input.txt"), "r") or die ("Unable to open date-input.txt");
$output = fopen("date-output.txt", "w") or die ("Unable to open date-input.txt");

while (!feof($input)) {
    $line = fgets($input);

    if (strpos($line, '#') !== false){
        $line = preg_replace("/(\d+)#(\d+)#(\d+)/", "$2-$1-$3", $line);
    }else{
        $line = str_replace('*', '-', $line);
    }
    /* Part of the original note of strtotime function 
    "If the year falls in the range 0 (inclusive) to 69 (inclusive), 2000 is added. 
    If the year falls in the range 70 (inclusive) to 99 (inclusive) then 1900 is added." */
    $line = date("Y-m-d", strtotime($line)); 
    fwrite($output, $line . PHP_EOL);
}

fclose($input);
fclose($output);

?>
