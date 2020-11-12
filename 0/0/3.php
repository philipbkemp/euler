<?php

	$number = "003";
	$problem = "Largest prime factor";
	$description = '<p>The prime factors of 13195 are 5, 7, 13 and 29.</p>'.
		'<p>What is the largest prime factor of the number 600851475143 ?</p>';

	include("../../template.php");

	function calculate() {

		$primeFactors = [];

		$number = 600851475143;

		$sNumber = floor(sqrt($number));

		for ( $x = 3 ; $x <= $sNumber ; $x++ ) {
			if ( $number % $x === 0 ) {

				if ( isPrime($x) ) {
					array_push($primeFactors,$x);
				}

			}
		}

		return array_pop($primeFactors);

	}

?>
