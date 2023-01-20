<?php
declare(strict_types=1);

require_once './snailShell.php';

$number = (int) readline("Write a number: ");
print_r(createSnailShell($number));