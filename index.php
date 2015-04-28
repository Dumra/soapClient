<?php
	require_once("lib/autoloader.php");

	$rateExtensionPhp = '';
	$citiesExtension = array();;
	$rateCurl = '';
	$citiesCurl = '';

	if ( isset($_POST["FromCurrencyExtension"]) && isset($_POST["ToCurrencyExtension"]) )
	{
		$from = $_POST["FromCurrencyExtension"];
		$to = $_POST["ToCurrencyExtension"];
		if ( is_string($from) && is_string($to) )
		{
			$fromCurrency = strtoupper($from);
			$toCurrency = strtoupper($to);
			$array = array("FromCurrency" => $fromCurrency, "ToCurrency" => $toCurrency);
			$obj = new ExtentionsSoapClient();
			try
			{
				$rateExtensionPhp = $obj->getCurrencyConversionResult($array);
			}
			catch (Exception $e)
			{
				$rateExtensionPhp = 'Wrong inputs. Try an other';
			}
		}

	}

	if ( isset($_POST["CountryNameExtension"])  )
	{
		$country = trim(strtolower($_POST["CountryNameExtension"]));
		if ( is_string($country) )
		{
			$array = array("CountryName" => $country);
			$obj = new ExtentionsSoapClient();
			try
			{
				$citiesExtension = $obj->getCities($array);
			}
			catch (Exception $e)
			{
				$citiesExtension = 'Wrong inputs. Try an other';
			}
		}
	}

	if ( isset($_POST["FromCurrencyCurl"]) && isset($_POST["ToCurrencyCurl"]) )
	{
		$from = $_POST["FromCurrencyCurl"];
		$to = $_POST["ToCurrencyCurl"];
		if ( is_string($from) && is_string($to) )
		{
			$fromCurrency = strtoupper($from);
			$toCurrency = strtoupper($to);
			$obj = new CurlSoapClient();
			try
			{
				$rateCurl = $obj->getCurrencyConversionResult($fromCurrency, $toCurrency);
			}
			catch (Exception $e)
			{
				$rateCurl = 'Wrong inputs. Try an other';
			}
		}

	}

	if ( isset($_POST["CountryNameCurl"])  )
	{
		$country = trim(strtolower($_POST["CountryNameCurl"]));
		if ( is_string($country) )
		{
			$obj = new CurlSoapClient();
			try
			{
				$citiesCurl = $obj->getCities($country);
			}
			catch (Exception $e)
			{
				$citiesCurl = 'Wrong inputs. Try an other';
			}
		}
	}
	require_once("templates/index.php");

?>