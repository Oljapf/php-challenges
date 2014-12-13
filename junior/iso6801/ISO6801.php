<?php
  
function solution1 ($date) {
    $year = substr($date, 3, -3);
    $output = '-' . substr($date, 0, -6) . '-' . substr($date, 6);

    if($year <= 14){
        $output = '20' . $year . $output;
    } else {
        $output = '19' . $year . $output;
    }

    //file_put_contents($output, $date, FILE_APPEND | LOCK_EX);
    echo $output;
}

function solution2 ($date) {
    $month = substr($date, 0, -7);

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

    $year = substr($date, 8);

    if($year <= 14){
        $year = '20' . $year;
    } else {
        $year = '19' . $year;
    }

    $output = $year . '-' . $month . '-' . substr($date, 4, -4);
    //file_put_contents($output, $date, FILE_APPEND | LOCK_EX);
    echo $output;
}

function solution3 ($date) {
    $output = substr($date, 6). '-' . substr($date, 3, -5) . '-' . substr($date, 0, -8);
    //file_put_contents($output, $date, FILE_APPEND | LOCK_EX);
    echo $output;
}

function solution4 ($date) {
    $year = substr($date, 6);
    $output = '-' . substr($date, 0, -6) . '-' . substr($date, 3, -3);

    if($year <= 14){
        $output = '20' . $year . $output;
    } else {
        $output = '19' . $year . $output;
    }
  	echo $output;
    //file_put_contents($output, $date, FILE_APPEND | LOCK_EX);
}

    //$input = fopen("date-input.txt", "r") or die ("Unable to open date-input.txt");
    //$output = fopen("date-output.txt", "w") or die ("Unable to open date-input.txt");

    //while (! feof($input)) {
    //$line = fgets($input);

$line = 'Jun 16, 82'; 
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

//fclose($input);
//fclose($output);

?>
