<!DOCTYPE html>
<html>

	<head>
		<!--<base="http://localhost/">-->
		<base='http://192.168.0.15/~user3/'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<title>Soap Client</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<div class="container">
			<div class="row">
				<fieldset>
					<legend>Get conversion rate from one currency to another currency, e.g. USD, EUR etc. :</legend>
					<form method="post">
						<p>
							<div class="col-md-2 col-md-offset-4"><label for="FromCurrency">From Currency:	</label></div>
							<input type="text" maxlength="3" name="FromCurrency" id="FromCurrency">
						</p>
						<p>
							<div class="col-md-2 col-md-offset-4"><label for="ToCurrency">To Currency:</label></div>
							<input type="text" maxlength="3" name="ToCurrency" id="ToCurrency">
						</p>
						<p>
							<div class="row">
								<div class="col-md-2 col-md-offset-5">
									<input type="radio" name="Currency" value="1" checked>PHP Extension
									<input type="radio" name="Currency" value="2">cURL
								</div>
							</div>
						</p>
						<div class="row">
							<div class="col-md-5 col-md-offset-6">
								<input type="reset" name="reset" value="Clear" class="btn btn-info">
								<input type="submit" name="submit" value="Get rate" class="btn btn-info">
							</div>
						</div>
					</form>
				</fieldset>
				<p><div class="col-md-5 col-md-offset-5"><i>Result: <?php echo $rate; ?></i></div></p>
			</div>

			<div class="row">
				<fieldset>
					<legend>Get all major cities by country name: </legend>
					<form method="post">
						<p>
							<div class="col-md-2  col-md-offset-4"><label for="CountryName">Country Name:	</label></div>
							<input type="text" name="CountryName" id="CountryName">
						</p>
						<div class="row">
							<div class="col-md-2 col-md-offset-5">
								<input type="radio" name="Country" value="1" checked>PHP Extension
								<input type="radio" name="Country" value="2">cURL
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 col-md-offset-6">
								<input type="reset" name="reset" value="Clear" class="btn btn-info">
								<input type="submit" name="submit" value="Get cities" class="btn btn-info">
							</div>
						</div>
					</form>
				</fieldset>
				<div class="col-md-5 col-md-offset-5"><i>Result:<br/> <?php print_r($cities); ?></i></div>
			</div>
		</div>
	</body>

</html>
