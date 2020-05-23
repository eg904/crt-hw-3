<?php

use App\Tags\PasswordInputClass;
use App\Tags\ResetInputClass;
use App\Tags\SubmitInputClass;
use App\Tags\TextInputClass;

require_once __DIR__ . '/../vendor/autoload.php';

echo (new TextInputClass('name'));
echo (new PasswordInputClass('password'));
echo new SubmitInputClass('', 'submit');
echo (new ResetInputClass('', 'reset'));