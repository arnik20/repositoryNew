<?php
$config = Dbconnect::instance();//  класс конфиг
$config->set(array(
    'host' => 'ovl.io',
    'user' => 'fw',
    'pass' => 'frameworking',
    'name' => 'framework'
));
$config->connect();// коннект
unset($config);// удалим инстанс