<?php

	$number = "004";
	$problem = "Largest palindrome product";
	$description = '<p>A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.</p>'.
		'<p>Find the largest palindrome made from the product of two 3-digit numbers.</p>';

	include("../../template.php");

	function calculate() {

		$start = 999;
		$end = 100;

		$palindrome;

		$c = 0;

		for ( $x=$start ; $x!==($end-1) ; $x-- ) {
			for ( $y=$start ; $y!==($end-1) ; $y-- ) {
				$c++;
				$thisProduct = ($x * $y) . "";

				if ( $thisProduct === strrev($thisProduct) ) {
					$palindrome = $x * $y;
				}

				if ( $x * $y <= $palindrome ) {
					break;
				}

			}
			if ( $x * $start <= $palindrome ) {
				break;
			}
		}

		return $palindrome;

	}

?>
