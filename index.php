<?php
	require_once("lib/autoloader.php");
    require_once("lib/config.php");
	$rate = '';
	$cities = '';

	if ( isset($_POST["FromCurrency"]) && isset($_POST["ToCurrency"]) )
	{
		$fromCurrency = strtoupper($_POST["FromCurrency"]);
		$toCurrency = strtoupper($_POST["ToCurrency"]);
		try
		{
			if ( $_POST["Currency"] === "1")
			{
				$array = array("FromCurrency" => $fromCurrency, "ToCurrency" => $toCurrency);
				$obj = new ExtentionsSoapClient();
				$rate = $obj->getCurrencyConversionResult($array, CURRENCY);
			}
			else
			{
				$obj = new CurlSoapClient();
				$rate = $obj->getCurrencyConversionResult($fromCurrency, $toCurrency, CURRENCY);
			}
		}
		catch (Exception $e)
		{
				$rate = 'Wrong inputs. Try an other';
		}
	}

	if ( isset($_POST["CountryName"])  )
	{
		$country = trim(strtolower($_POST["CountryName"]));
		try
		{
			if ( $_POST["Country"] === "1")
			{
				$array = array("CountryName" => $country);
				$obj = new ExtentionsSoapClient();
				$cities = $obj->getCities($array, CITIES);
			}
			else
			{
				$obj = new CurlSoapClient();
				$cities = $obj->getCities($country, CITIES);
			}
		}
		catch(Exception $e)
		{
			$cities = 'Wrong inputs. Try an other';
		}
	}

	require_once("templates/index.php");

?>
