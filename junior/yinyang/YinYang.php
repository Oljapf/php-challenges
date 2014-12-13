<?php

class YinYang
{
	public static function divisionCheck ($int1, $int2){
		$start=0;
		$end=0;

		if ($int1 <= $int2) {
			$start = $int1;
			$end = $int2;
		}

		else{
			$start = $int2;
			$end = $int1;
		}

		for ($start; $start <= $end; $start++) {
			if(($start % 3 == 0) && ($start % 5 == 0)){
				echo 'Yin Yang';
			}
		else if ($start % 3 == 0) {
			echo 'Yin';
		}
		else if ($start % 5 == 0){
			echo 'Yang';
		}
		else {
			echo $start;
		}
		echo ' ';
		}
	}
}

YinYang::divisionCheck(2, 17);

?>