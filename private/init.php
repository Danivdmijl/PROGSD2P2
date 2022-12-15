<?php

define("PRIVATE_PATH", dirname(__FILE__));
define("SHARED_PATH", PRIVATE_PATH . "/shared");

echo SHARED_PATH;

include SHARED_PATH . "/functions.php";

?>