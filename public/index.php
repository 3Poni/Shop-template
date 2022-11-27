<?php
session_start();

use Vendor\Errorhandler\ErrorHandler;

require "../vendor/errorhandler/errorhandler.php";

$e = new ErrorHandler;
$e->register();

require  "../config.php";

require  "../vendor/autoload.php";

require "../routes/api.php";

require  "../routes/web.php";



