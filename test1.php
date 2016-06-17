<?php

require 'config.php';
require 'DynamicsGP/autoload.php';


$options = array(
//    'login'         => $configurations['login'],
//    'password'      => $configurations['password'],
//    'wsdl'          => $configurations['url'],
    'location'      => $configurations['url'],
    'soap_version'  => SOAP_1_2,
    'trace'         => 1,
    'exceptions'    => 1,
    'connection_timeout'    => 240,
    'encoding'      => 'UTF-8',
    'cache_wsdl'    => WSDL_CACHE_NONE,

//    'proxy_host'     => "24.52.105.174",
//    'proxy_login'    => $configurations['login'],
//    'proxy_password' => $configurations['password']
);

$wsdl = $configurations['url'];


$nameSpace = 'DynamicsGP';
$headerData = array(
    'UsernameToken' => array(
        'Username' => $configurations['login'],
        'Password' =>  $configurations['password']
    )
);
$header = new SOAPHeader($nameSpace, 'Security', $headerData, true);

$service = new \DynamicsGP($options, $wsdl);
$service->__setSoapHeaders($header);

$context = new \Context();



try{
//    $companyKey = new \CompanyKey();
//    $companyKey->setId(2);
//
//    $getCompanyKeys = new \GetCompanyByKey($companyKey, $context);
//    $service->GetCompanyByKey($getCompanyKeys);

    $CustomerCriteria = new \CustomerCriteria();

    $GetCustomerList = new \GetCustomerList($CustomerCriteria, $context);
    $service->GetCustomerList($GetCustomerList);
} catch (Exception $e) {

    echo "go exseption\n";
    var_dump($e->getMessage());
    print_r($e->getTrace());

    var_dump($service->__getLastRequest());
    var_dump($service->__getLastResponse());
    var_dump($service->__getLastResponseHeaders());

}

