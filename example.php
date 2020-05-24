<?php

require 'vendor/autoload.php';

use Otus\Validator\EmailValidator;

$email = 'test@test.com';
$valid = (new EmailValidator($email))->validate();
var_dump($valid);
