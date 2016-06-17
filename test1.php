<?php

require 'config.php';
require 'DynamicsGP/autoload.php';


$options = array(
    'login'         => $configurations['login'],
    'password'      => $configurations['password'],
    'wsdl'          => $configurations['url']
);

$wsdl = $configurations['url'];

$service = new \DynamicsGP($options, $wsdl);

$criteria = new \CompanyCriteria();
$context = new \Context();
$companyList = new \GetCompanyList($criteria,$context);

$service->GetCompanyList($companyList);