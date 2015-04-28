<?php


class CurlSoapClient {

	private $ch;

	public function getCurrencyConversionResult($from, $to)
	{
		$ch = curl_init("http://www.webservicex.net/CurrencyConvertor.asmx/ConversionRate?FromCurrency=$from&ToCurrency=$to");
		$this->ch = $ch;
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		return curl_exec($ch);
	}

	public function getCities($country)
	{
		$ch = curl_init("http://www.webservicex.net//globalweather.asmx/GetCitiesByCountry?CountryName=$country");
		$this->ch = $ch;
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$str = simplexml_load_string(curl_exec($ch));
		return (string)$str;
	}


	function __destruct() {
		curl_close($this->ch);
	}
} 