<?php

[$authenticatedClient, $config] = require __DIR__ . '/login.php';

$lookApi = new \Swagger\Client\Api\LookApi($authenticatedClient, $config);

$looks = $lookApi->searchLooks(null, 'test');

echo 'Count: ' . count($looks) . "\n";
foreach ($looks as $look) {
    echo $look->getTitle() . ', folder_id: ' . $look->getFolderId() . ', short_url: ' . $look->getShortUrl() . "\n";
}
