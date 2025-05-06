<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'db_config.php';
$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);