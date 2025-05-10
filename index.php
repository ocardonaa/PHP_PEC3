<?php

require 'config/bootstrap.php';
require 'scripts/functions/start_session.php';

try {
    require Router::load('routes.php')->direct(Request::uri());
} catch (Exception $e) {
    echo $e->getMessage();
}

