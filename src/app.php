<?php
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';
use TDD\FizzBuzz;

print_r(FizzBuzz::process(range(0, 100)));

