<?php

use Phalcon\Mvc\Micro;

$app = new Micro();

$app->get(
    "/",
    function () {
        echo "<h1>Your dockerized phalcon app!</h1>";
        phpinfo();
    }
);

$app->get(
    "/say/welcome/{name}",
    function ($name) {
        echo "<h1>Welcome $name!</h1>";
    }
);

$app->handle();