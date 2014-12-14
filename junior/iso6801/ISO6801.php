<?php
  
function solution1 ($date) {
    $year = substr($date, 3, 2);
    $output = '-' . substr($date, 0, 2) . '-' . substr($date, 6, 2);

    if($year <= 14){
        $output = '20' . $year . $output;
    } else {
        $output = '19' . $year . $output;
    }

    return $output;
}

function solution2 ($date) {
    $month = substr($date, 0, 3);

    switch ($month) {
        case 'Jan':
            $month = '01';
            break;
        
        case 'Feb':
            $month = '02';
            break;
        
        case 'Mar':
            $month = '03';
            break;
        
        case 'Apr':
            $month = '04';
            break;
        
        case 'May':
            $month = '05';
            break;
        
        case 'Jun':
            $month = '06';
            break;
        
        case 'Jul':
            $month = '07';
            break;
        
        case 'Aug':
            $month = '08';
            break;
        
        case 'Sep':
            $month = '09';
            break;
        
        case 'Oct':
            $month = '10';
            break;
        
        case 'Nov':
            $month = '11';
            break;
        
        case 'Dec':
            $month = '12';
            break;
    }
    $year = substr($date, 8, 2);

    if($year <= 14){
        $output = '20' . $year;
    } else {
        $output = '19' . $year;
    }

    $output = $output . '-' . $month . '-' . substr($date, 4, 2);
    return $output;
}

function solution3 ($date) {
    $output = substr($date, 6, 4). '-' . substr($date, 3, 2) . '-' . substr($date, 0, 2);
    return $output;
}

function solution4 ($date) {
    $year = substr($date, 6, 2);
    $output = '-' . substr($date, 0, 2) . '-' . substr($date, 3, 2);
    //trim($output);
    if($year <= 14){
        $output = '20' . $year . $output;
    } else {
        $output = '19' . $year . $output;
    }
    
    return $output;
}

$input = fopen(realpath("E:\Jobs\php-challenges\junior\iso6801\date-input.txt"), "r") or die ("Unable to open date-input.txt");
$output = fopen("E:\Jobs\php-challenges\junior\iso6801\date-output.txt", "w") or die ("Unable to open date-input.txt");

while (!feof($input)) {
    $line = fgets($input);
    
    switch ($line) {

        case (strpos($line, '#') !== false):
          	$date = solution1($line);
            break;
            
        case (strpos($line, ' ') !== false):
            $date = solution2($line);
            break;
            
        case (strpos($line, '*') !== false):
            $date = solution3($line);
            break;
        
        case (strpos($line, '-') !== false):
          	$date = trim($line);
            break;

        case (strpos($line, '/') !== false):
            $date = solution4($line);
            break;
    } 
    fwrite($output, $date . PHP_EOL);
}

fclose($input);
fclose($output);

?>
