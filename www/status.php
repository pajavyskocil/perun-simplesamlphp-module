<?php

use SimpleSAML\Configuration;
use SimpleSAML\Module\perun\StatusConnector;
use SimpleSAML\XHTML\Template;

const OK = 'OK';
const WARNING = 'WARNING';

const CONFIG_FILE_NAME = 'module_perun.php';
const SHOWN_SERVICES = 'status.shown_services';

$services = [];

$config = Configuration::getInstance();
$perunConfig = Configuration::getConfig(CONFIG_FILE_NAME);

$shownServicesList = $perunConfig->getArray(SHOWN_SERVICES, []);

$statusConnector = StatusConnector::getInstance();
$services = $statusConnector->getStatus();

$shownServices = [];


if (empty($shownServicesList)) {
    $shownServices = $services;
} else {
    foreach ($services as $service) {
        $serviceName = $service['name'];
        if (array_key_exists($serviceName, $shownServicesList)) {
            $service['name'] = $shownServicesList[$serviceName]['name'];
            $service['description'] = $shownServicesList[$serviceName]['description'];
            $shownServices[] = $service;
        }
    }
}

if (isset($_GET['output']) && $_GET['output'] === 'json') {
    header('Content-type: application/json');
    echo json_encode($shownServices);
    exit;
}

$t = new Template($config, 'perun:status-tpl.php');
$t->data['services'] = $shownServices;
$t->show();
