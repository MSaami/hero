<?php

require_once __DIR__ . '/../bootstrap/app.php';


$container->get('emitter')->emit($response);
