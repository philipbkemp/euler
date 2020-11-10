<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<title>Project Euler</title>
	</head>
	<body>

		<div class="container">
			<div class="row mt-3">
				<div class="col">
					<h1>001: Multiples of 3 and 5</h1>
					<hr />
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p>If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.</p>
					<p>Find the sum of all the multiples of 3 or 5 below 1000.</p>
					<hr />
				</div>
			</div>

			<?php if ( ! isset($_GET["go"]) ) { ?>
				<div class="row">
					<div class="col-4">
						<a href="/" class="btn btn-outline-secondary">Home</a>
					</div>
					<div class="col-4 text-center">
						<a href="?go" class="btn btn-outline-success">Calculate</a>
					</div>
				</div>
			<?php } else { ?>
				<div class="row">
					<div class="col-4">
						<a href="/" class="btn btn-outline-secondary">Home</a>
					</div>
					<div class="col-4">
						<input type="text" readonly disabled class="form-control" value="<?php print calculate(); ?>" />
					</div>
				</div>
			<?php } ?>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>

<?php
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