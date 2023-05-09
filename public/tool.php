<?php
use \Exception as Exception;

class CustomException extends Exception {
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message = $message ? $message : 'Invalid';
        parent::__construct($message, $code, $previous);
    }
}


class People {
    function setAge(int $age) {
        try {
            if ($age < 0) {
                throw new CustomException();
            }
            echo 'Set';
        } catch (CustomException $ex) {
            var_dump($ex->getMessage());
        }

    }

}

$people = new People();
$people->setAge(-1);