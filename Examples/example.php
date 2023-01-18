<?php

define('APPLICATION_SELF', __DIR__);

require(APPLICATION_SELF . '/vendor/autoload.php');

use Templater\Templater;

$templater = new Templater();
$templater->setPath(APPLICATION_SELF . '/View');
$templater->addGlobals([
    'test' => [
        'status' => 'ok'
    ]
]);

$data = [];
echo $templater->render('{page_container:index}', $data);
