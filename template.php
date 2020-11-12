<?php

function isPrime($number) {
	if ( $number === 1 ) {
		return false; 
	}
	if ( $number === 2 ) {
		return true;
	}

	$sNumber = floor(sqrt($number));

	for ( $x = 3 ; $x <= $sNumber ; $x++ ) {
		if ( $number % $x === 0 ) {
			return false;
		}
	}
	
	return true;
}

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<title>Project Euler <?php print $number; ?></title>
	</head>
	<body>

		<div class="container">
			<div class="row mt-3">
				<div class="col">
					<h1><?php print $number; ?>: <?php print $problem; ?></h1>
					<hr />
				</div>
			</div>
			<div class="row">
				<div class="col">
					<?php print $description; ?>
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