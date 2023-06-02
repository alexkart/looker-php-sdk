<?php

[$authenticatedClient, $config] = require __DIR__ . '/login.php';

$dashboardApi = new \Swagger\Client\Api\DashboardApi($authenticatedClient, $config);

$dashboards = $dashboardApi->allDashboards(['title']);

echo 'Count: ' . count($dashboards) . "\n";
foreach ($dashboards as $dashboard) {
    echo $dashboard->getTitle() . "\n";
}
