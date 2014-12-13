<?php
  
function solution1 ($date) {
    $year = substr($date, 3, 2);
    $output = '-' . substr($date, 0, 2) . '-' . substr($date, 6);

    if($year <= 14){
        $output = '20' . $year . $output;
    } else {
        $output = '19' . $year . $output;
    }

    //file_put_contents($output, $date, FILE_APPEND | LOCK_EX);
    echo $output;
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

    $output = $output . '-' . $month . '-' . substr($date, 4, 2) . "\n";
    trim($output);
    //file_put_contents($output, $date, FILE_APPEND | LOCK_EX);
    echo $output;
}

function solution3 ($date) {
    $output = substr($date, 6, 4). '-' . substr($date, 3, 2) . '-' . substr($date, 0, 2) . "\n";
    //file_put_contents($output, $date, FILE_APPEND | LOCK_EX);
    trim($output);
    echo $output;
}

function solution4 ($date) {
    $year = substr($date, 6, 2);
    $output = '-' . substr($date, 0, -8) . '-' . substr($date, 3, -5);
    trim($output);
    if($year <= 14){
        $output = '20' . $year . $output;
    } else {
        $output = '19' . $year . $output;
    }
    
  	echo $output . "\n";
    //file_put_contents($output, $date, FILE_APPEND | LOCK_EX);
}

$input = fopen(realpath("E:\Jobs\php-challenges\junior\iso6801\date-input.txt"), "r") or die ("Unable to open date-input.txt");

//$output = fopen("date-output.txt", "w") or die ("Unable to open date-input.txt");

while (!feof($input)) {
    $line = fgets($input);
    echo " " . "\n";
    echo $line;

    switch ($line) {

        case (strpos($line, '#') !== false):
          	solution1($line);
            break;
            
        case (strpos($line, ' ') !== false):
            solution2($line);
            break;
            
        case (strpos($line, '*') !== false):
            solution3($line);
            break;
        
        case (strpos($line, '-') !== false):
          	echo $line;
            break;

        case (strpos($line, '/') !== false):
            solution4($line);
            break;
    } 
}

fclose($input);
//fclose($output);

?>
