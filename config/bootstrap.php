<?php

require __DIR__ . '/../database/Connection.php';
require __DIR__ . '/../database/QueryBuilder.php';
require __DIR__ . '/../database/Router.php';
require  __DIR__ . '/../database/Videogame.php';
require  __DIR__ . '/../database/Request.php';
$config = require 'db_config.php';
$query = new QueryBuilder(Connection::make($config['database']));

