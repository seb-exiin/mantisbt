<?php

$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';

#Path to the MantisBT root directory on the server
define( 'MANTIS_ROOT', '../' );
include( MANTIS_ROOT . 'core.php' );

$conf['useacl']      = 1;
$conf['authtype']    = 'authmantis';
$conf['superuser']   = '@ADMINISTRATOR';
$conf['plugin']['authmantis']['mantis_root'] = '../';