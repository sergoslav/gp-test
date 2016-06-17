<?php

require 'config.php';
require 'DynamicsGP/autoload.php';


$options = array(
    'login'         => $configurations['login'],
    'password'      => $configurations['password'],
//    'wsdl'          => $configurations['url'],
    'location'      => $configurations['url'],
    'soap_version'  => SOAP_1_2,
    'trace'         => 1,
    'exceptions'    => 1,
    'connection_timeout'    => 180,
    'encoding'      => 'UTF-8',
    'cache_wsdl'    => WSDL_CACHE_NONE,

//    'proxy_host'     => "24.52.105.174",
//    'proxy_login'    => $configurations['login'],
//    'proxy_password' => $configurations['password']
);

$wsdl = $configurations['url'];

$service = new \DynamicsGP($options, $wsdl);

$context = new \Context();

$companyKey = new \CompanyKey();
$companyKey->setId(2);

$getCompanyKeys = new \GetCompanyByKey($companyKey, $context);

try{
    $service->GetCompanyByKey($getCompanyKeys);
} catch (Exception $e) {

    echo "go exseption\n";
    var_dump($e->getMessage());
    print_r($e->getTrace());
}

