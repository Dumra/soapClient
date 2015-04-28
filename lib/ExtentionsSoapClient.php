<?php


class ExtentionsSoapClient {

	public function getCurrencyConversionResult($currency)
	{
		$client = new SoapClient("http://www.webservicex.net/CurrencyConvertor.asmx?WSDL");
		$obj = $client->ConversionRate($currency);
		return $obj->ConversionRateResult;
	}

	public function getCities($country)
	{
		$client = new SoapClient("http://www.webservicex.net/globalweather.asmx?WSDL");
		$obj = $client->GetCitiesByCountry($country);
		return $obj->GetCitiesByCountryResult;
	}

} 