<?php

	$number = "005";
	$problem = "Smallest multiple";
	$description = '<p>2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.</p>
		<p>What is the smallest positive number that is <dfn title="divisible with no remainder">evenly divisible</dfn> by all of the numbers from 1 to 20?</p>';

	include("../../template.php");

	function calculate() {

		$max = 20;

		$num = 0;


		while ( ! $divisibleByAll ) {

			$num = $num + $max;

			$divisibleByAll = true;

			for ( $x=$max ; $x!==0 ; $x-- ) {
				if ( $num % $x !== 0 ) {
					$divisibleByAll = false;
					break;
				}
			}

		}

		return $num;

	}

?>
