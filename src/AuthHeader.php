<?php


require 'config.php';

$username = $configurations['login'];
$password = $configurations['password'];

$strWSSENS = "http://schemas.xmlsoap.org/ws/2002/07/secext";

$objSoapVarUser = new SoapVar($username, XSD_STRING, NULL, $strWSSENS, NULL, $strWSSENS);
$objSoapVarPass = new SoapVar($password, XSD_STRING, NULL, $strWSSENS, NULL, $strWSSENS);


$objWSSEAuth = new clsWSSEAuth($objSoapVarUser, $objSoapVarPass);

$objSoapVarWSSEAuth = new SoapVar($objWSSEAuth, SOAP_ENC_OBJECT, NULL, $strWSSENS, 'UsernameToken', $strWSSENS);
$objWSSEToken = new clsWSSEToken($objSoapVarWSSEAuth);
$objSoapVarWSSEToken = new SoapVar($objWSSEToken, SOAP_ENC_OBJECT, NULL, $strWSSENS, 'UsernameToken', $strWSSENS);
$objSoapVarHeaderVal=new SoapVar($objSoapVarWSSEToken, SOAP_ENC_OBJECT, NULL, $strWSSENS, 'Security', $strWSSENS);
$objSoapVarWSSEHeader = new SoapHeader($strWSSENS, 'Security', $objSoapVarHeaderVal,true);

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


// RESULT: $objSoapVarWSSEHeader