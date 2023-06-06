<?php

$router = new \Ddev\DdevRouter\Router;
$router->route('selenium')
    ->uri('/wd/hub/*')
    ->uriPath('selenium-server-standalone.jar')
    ->targetPort(4444)
    ->regex('^/wd/hub/');

