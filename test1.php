<?php
/**
 * Created by PhpStorm.
 * User: sergoslav
 * Date: 17.06.16
 * Time: 16:39
 */

require 'DynamicsGP/autoload.php';

$service = new \DynamicsGP();

$companyList = new \GetCompanyList();

$service->GetCompanyList($companyList);