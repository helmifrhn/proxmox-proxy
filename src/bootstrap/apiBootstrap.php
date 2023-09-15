<?php

$mgConfigFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'api.php';

require $mgConfigFile;
/**
 * @deprecated
putenv('DB_CONNECTION=mysql');
putenv('DB_HOST=' . $dbHost);
putenv('DB_PORT=' . $dbPort);
putenv('DB_DATABASE=' . $dbName);
putenv('DB_USERNAME=' . $dbUserName);
putenv('DB_PASSWORD=' . $dbPassword);
 */
putenv('APP_KEY=' . $apiKey);
putenv('WHMCS_IPS=' . $whmcsIps);
putenv('WHMCS_SECURITY_TOKEN=' . $whmcsSecurityToken);
putenv('WHMCS_FORCE_SSL=' . $forceSsl);
putenv('CLIENT_IP_ADDRESS_VALIDATE=' . $clientIpAddressValidate);



