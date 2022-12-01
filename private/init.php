<?php
include "/Downloads/xamp/htdocs/PROGSD2P2/private";
include "/Downloads/xamp/htdocs/PROGSD2P2/private/shared";
include "/Downloads/xamp/htdocs/PROGSD2P2";

$root = substr($_SERVER['SCRIPT_NAME'],
    0,
    strpos($_SERVER['SCRIPT_NAME'], '/public') + 7);
define("ROOT_URL", $root);

function url_path($path) {
    if($path[0] != '/') {
        $path = "/" . $path;
    }
    return ROOT_URL . $path;
}

?>