<?php

require 'config.php';
require 'DynamicsGP/autoload.php';


$options = array(
    'login'         => $configurations['login'],
    'password'      => $configurations['password']
);

$wsdl = $configurations['url'];

$service = new \DynamicsGP($options, $wsdl);

$companyList = new \GetCompanyList();

$service->GetCompanyList($companyList);