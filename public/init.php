<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;

function autoloadSrc($classname) {
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = dirname(__DIR__).'/src/'.$directory.'.php';
    require_once $filename;
}

spl_autoload_register('autoloadSrc');

$customer2 = new Customer(1, 'Mary', 'Poppins', 'mp@mail.com');

var_dump($customer2);