<?php

	$number = "001";
	$problem = "Multiples of 3 and 5";
	$description = '<p>If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.</p>'.
			'<p>Find the sum of all the multiples of 3 or 5 below 1000.</p>';

	include("../../template.php");

	function calculate() {

		$sum = 0;
		$max = 1000;

		for ( $x=1 ; $x!==$max ; $x++ ) {

			$isMultiple = ( $x % 3 === 0 ) || ( $x % 5 === 0 );

			if ( $isMultiple ) {
				$sum = $sum + $x;
			}

		}

		return $sum;

	}
?>