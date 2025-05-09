<?php

require 'config/bootstrap.php';
require 'scripts/start_session.php';

require Router::load('routes.php')->direct(Request::uri());

?>

