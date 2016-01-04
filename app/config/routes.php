<?php
# ./app/config/routes.php

use App\Provider\HelloControllerProvider;

$app->mount('/hello', new HelloControllerProvider());