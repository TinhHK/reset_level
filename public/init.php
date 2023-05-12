<?php

require_once 'autoload.php';
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;


function checkIfValid(Customer $customer, array $books): bool {
    return $customer->getAmountToBorrow() >= count($books);
}

function processPayment (Payer $payer ,float $amount) {
    if ($payer->isExtentOfTaxes()) {
        echo 'What a lucky one...';
    } else {
        $amount *= 1.6;
    }
    $payer->pay($amount);
}


$books = ['vinahey', 'dance club', 'guru'];
$basic = new Basic(5, 'John', 'Doe', 'johndoe@mail.com');
var_dump(checkIfValid($basic, $books)); // ok
$premium = new Premium(7, 'James', 'Bond', 'james@bond.com');
var_dump(checkIfValid($premium, $books)); // fails