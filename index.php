<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    date_default_timezone_set('Europe/Amsterdam');

    /**
     * Auto loader
     */
    require_once 'private'.DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.'AutoLoader.php';

    $aPaths = array();
    $aPaths['classes'] 		= 'private'.DIRECTORY_SEPARATOR.'application';

    $oLoader = new AutoLoader($aPaths);

    $oController = new Controller();
    