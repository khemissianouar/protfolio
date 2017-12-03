<?php
require '../vendor/autoload.php';
$app =new \Portfolio\App();
$response = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());
\Http\Response\send($response);
