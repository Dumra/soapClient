<?php


class ExtentionsSoapClient {

	public function getCurrencyConversionResult($currency, $url)
	{
		$client = new SoapClient($url . '?WSDL');
		$obj = $client->ConversionRate($currency);
		return $obj->ConversionRateResult;
	}

	public function getCities($country, $url)
	{
		$client = new SoapClient($url . '?WSDL');
		$obj = $client->GetCitiesByCountry($country);
		$xml = $obj->GetCitiesByCountryResult;
		return $xml;
	}

} 
