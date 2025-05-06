<?php

require __DIR__ . '/../database/Connection.php';
require __DIR__ . '/../database/QueryBuilder.php';
$config = require 'db_config.php';
$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);