<?php

[$authenticatedClient, $config] = require __DIR__ . '/login.php';

$folderApi = new \Swagger\Client\Api\FolderApi($authenticatedClient, $config);

$folders = $folderApi->allFolders(['name']);

foreach ($folders as $folder) {
    echo $folder->getName() . "\n";
}
