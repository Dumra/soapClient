<?php


class CurlSoapClient {

	private $ch;

	public function getCurrencyConversionResult($from, $to)
	{
		$ch = curl_init("http://www.webservicex.net/CurrencyConvertor.asmx/ConversionRate?FromCurrency=$from&ToCurrency=$to");
		$this->ch = $ch;
		return curl_exec($ch);
	}

	public function getCities($country)
	{
		$ch = curl_init("http://www.webservicex.net//globalweather.asmx/GetCitiesByCountry?CountryName=$country");
		$this->ch = $ch;
		return curl_exec($ch);
	}


	function __destruct() {
		curl_close($this->ch);
	}
} 