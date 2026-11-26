<?php

declare(strict_types=1);

error_reporting(-1);

if (session_status() === PHP_SESSION_NONE) {
    
    session_start();
}

require_once __DIR__.'/../env_const.php';

require_once ROOT.'/../vendor/autoload.php';

require_once CONTROLLERS.'/about.php';

include_once CORE.'/utils/logg.php';