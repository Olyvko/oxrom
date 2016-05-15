<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id' => 'paydirekt',
    'title' => array(
        'en' => 'Module for Paydirekt payment.',
        'de' => 'Modul f�r die Zahlung mit Paydirekt.',
    ),
    'thumbnail' => 'logo.jpg',
    'version' => '0.0.1',
    'author' => 'ZinitSolution',
    'url' => 'http://zinitsolutions.com',
    'email' => 'dev@zinitsolutions.com',
    'extend' => array(
        'payment' => 'paydirekt/controllers/zspaydirektpayment',
    ),
    'files' => array(
        'zsPaydirektConfig' => 'paydirekt/core/zspaydirektconfig.php',
        'zsPaydirektEvents' => 'paydirekt/core/zspaydirektevents.php',
        'zsPaydirektCheckValidator' => 'paydirekt/core/zspaydirektcheckvalidator.php',
        'zsPaydirektDispatcher' => 'paydirekt/controllers/zspaydirektdispatcher.php',
        'zsPaydirektStandardDispatcher' => 'paydirekt/controllers/zspaydirekstandarddispatcher.php',

        //paydirekt api files
        'zsPaydirektCheckoutApi' => 'paydirekt/core/api/zspaydirektcheckoutapi.php',
        'zsPaydirektCheckoutItem' => 'paydirekt/core/api/zspaydirektcheckoutitem.php',
        'zsPaydirektCheckoutAddress' => 'paydirekt/core/api/zspaydirektcheckoutaddress.php',
        'zsPaydirektPaydirektRequest' => 'paydirekt/core/api/paydirektrequest/zspaydirektpaydirektrequest.php',
        'zsPaydirektSetCheckoutRequestBuilder' => 'paydirekt/core/api/paydirektrequest/zspaydirektsetcheckoutrequestbuilder.php',

    ),
    'settings' => array(
        array('group' => 'zspaydirekt_api', 'name' => 'sZSPaydirektApiKey', 'type' => 'str', 'value' => 'e51a318e-be69-4113-be70-ac36801cf13f'),
        array('group' => 'zspaydirekt_api', 'name' => 'sZSPaydirektApiSecret', 'type' => 'str', 'value' => 'JCJQKyhZRaw8hIBFiA8lWB3-sOlI-zGguNrhvxUFd1Y='),
    ),

    'events' => array(
        'onActivate' => 'zsPaydirektEvents::onActivate',
        'onDeactivate' => 'zsPaydirektEvents::onDeactivate'
    ),

);
