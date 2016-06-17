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
$wsdl = null;

$username = $configurations['login'];
$password = $configurations['password'];

$strWSSENS = "http://schemas.xmlsoap.org/ws/2002/07/secext";

$objSoapVarUser = new SoapVar($username, XSD_STRING, NULL, $strWSSENS, NULL, $strWSSENS);
$objSoapVarPass = new SoapVar($password, XSD_STRING, NULL, $strWSSENS, NULL, $strWSSENS);

class clsWSSEAuth {
    private $Username;
    private $Password;
    function __construct($username, $password) {
        $this->Username=$username;
        $this->Password=$password;
    }
}
class clsWSSEToken {
    private $UsernameToken;
    function __construct ($innerVal){
        $this->UsernameToken = $innerVal;
    }
}
$objWSSEAuth = new clsWSSEAuth($objSoapVarUser, $objSoapVarPass);

$objSoapVarWSSEAuth = new SoapVar($objWSSEAuth, SOAP_ENC_OBJECT, NULL, $strWSSENS, 'UsernameToken', $strWSSENS);
$objWSSEToken = new clsWSSEToken($objSoapVarWSSEAuth);
$objSoapVarWSSEToken = new SoapVar($objWSSEToken, SOAP_ENC_OBJECT, NULL, $strWSSENS, 'UsernameToken', $strWSSENS);
$objSoapVarHeaderVal=new SoapVar($objSoapVarWSSEToken, SOAP_ENC_OBJECT, NULL, $strWSSENS, 'Security', $strWSSENS);
$objSoapVarWSSEHeader = new SoapHeader($strWSSENS, 'Security', $objSoapVarHeaderVal,true);
//$headerData = array(
//    'UsernameToken' => array(
//        'Username' => $configurations['login'],
//        'Password' =>  $configurations['password']
//    )
//);
//$header = new SOAPHeader($nameSpace, 'Security', $headerData, true);

$service = new \DynamicsGP($options, $wsdl);
$service->__setSoapHeaders($objSoapVarWSSEHeader);

try{
    $context = new \Context();

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

