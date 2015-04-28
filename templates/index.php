<!DOCTYPE html>
<html>

	<head>
		<base="http://localhost/">
		<!--<base='http://192.168.0.15/~user3/'>-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<title>Soap Client</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<div class="container">


			<div class="row">
				<div class="col-md-12">
					<fieldset>
						<div class="col-md-4 col-md-offset-4 header"  style="text-align: center"><legend>Extension PHP Soap</legend></div>
						<div class="container well">
						<div class="col-md-12">
							<form method="post">
								<fieldset>
									<legend>Get conversion rate from one currency to another currency, e.g. USD, EUR etc. :</legend>
									<p>
										<div class="col-md-2 col-md-offset-4"><label for="FromCurrencyExtension">From Currency:	</label></div>
										<input type="text" maxlength="3" name="FromCurrencyExtension" id="FromCurrencyExtension">
									</p>
									<p>
										<div class="col-md-2 col-md-offset-4"><label for="ToCurrencyExtension">To Currency:</label></div>
										<input type="text" maxlength="3" name="ToCurrencyExtension" id="ToCurrencyExtension">
									</p>
									<div class="col-md-5 col-md-offset-6">
										<input type="reset" name="reset" value="Clear" class="btn btn-info">
										<input type="submit" name="submit" value="Get rate" class="btn btn-info">
									</div>
								</fieldset>
								<p><div class="col-md-5 col-md-offset-5"><i>Result: <?php echo $rateExtensionPhp; ?></i></div></p>
							</form>
						</div>

						<div class="col-md-12">
							<form method="post">
								<fieldset>
									<legend>Get all major cities by country name: </legend>
									<p>
									<div class="col-md-2  col-md-offset-4"><label for="CountryNameExtension">Country Name:	</label></div>
									<input type="text" name="CountryNameExtension" id="CountryNameExtension">
									</p>
									<div class="col-md-5 col-md-offset-6">
										<input type="reset" name="reset" value="Clear" class="btn btn-info">
										<input type="submit" name="submit" value="Get cities" class="btn btn-info">
									</div>
								</fieldset>
								<p><div class="col-md-10 col-md-offset-5"><i>Result:<br/> <?php print_r($citiesExtension); ?></i></div></p>
							</form>
						</div>
						</div>
					</fieldset>
				</div>

				</div>


					<fieldset>
						<div class="col-md-4 col-md-offset-4 header" style="text-align: center"><legend>Curl Soap</legend></div>
						<div class="container well">
						<div class="col-md-12">
							<form method="post">
								<fieldset>
									<legend>Get conversion rate from one currency to another currency, e.g. USD, EUR etc. :</legend>
									<p>
									<div class="col-md-2  col-md-offset-4"><label for="FromCurrencyCurl">From Currency:	</label></div>
									<input type="text" maxlength="3" name="FromCurrencyCurl" id="FromCurrencyCurl">
									</p>
									<p>
									<div class="col-md-2  col-md-offset-4"><label for="ToCurrencyCurl">To Currency:</label></div>
									<input type="text" maxlength="3" name="ToCurrencyCurl" id="ToCurrencyCurl">
									</p>
									<div class="col-md-5 col-md-offset-6">
										<input type="reset" name="reset" value="Clear" class="btn btn-primary">
										<input type="submit" name="submit" value="Get rate" class="btn btn-primary">
									</div>
								</fieldset>
								<p><div class="col-md-5  col-md-offset-5"><i>Result: <?php echo $rateCurl; ?></i></div></p>
							</form>
						</div>

						<div class="col-md-12">
							<form method="post">
								<fieldset>
									<legend>Get all major cities by country name: </legend>
									<p>
									<div class="col-md-2  col-md-offset-4"><label for="CountryNameCurl">Country Name:	</label></div>
									<input type="text" name="CountryNameCurl" id="CountryNameCurl">
									</p>
									<div class="col-md-5 col-md-offset-6">
										<input type="reset" name="reset" value="Clear" class="btn btn-primary">
										<input type="submit" name="submit" value="Get cities" class="btn btn-primary">
									</div>
								</fieldset>
								<p><div class="col-md-5  col-md-offset-5"><i>Result: <?php echo $citiesCurl; ?></i></div></p>
							</form>
						</div>
						</div>
					</fieldset>

				</div>
			</div>
		</div>
	</body>

</html>