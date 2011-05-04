<?php
require_once dirname(__FILE__).'/config.php';
require_once dirname(__FILE__).'/common.php';
require_once dirname(__FILE__).'/google_apps.php';
require_once dirname(__FILE__).'/kvs.php';

$api = new GoogleApps();

$loggedIn = $api->Login(Config::GOOGLE_APPS_USER, Config::GOOGLE_APPS_DOMAIN, Config::GOOGLE_APPS_PASS);

$result = $api->ChangeUsername(Config::GOOGLE_APPS_DOMAIN, 'testalpha', 'testbeta');
var_dump($result);