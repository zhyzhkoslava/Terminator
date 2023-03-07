<?php

spl_autoload_register(function ($class_name)
{
    require_once $class_name . '.php';
});

$jun = new Junior();
$tl = new TeamLead(new GoodState());
$hr = new HR($tl);

$tl->junior = $jun;
$jun->work(0);

$tl->checkJuniorWork();
$hr->teamLead = $tl;
var_dump($hr);
