<?php

declare(strict_types=1);

namespace App\Exception;

class UserNotFoundException extends \Exception
{
    public function __construct(string $message = "user not found!!")
    {
        parent::__construct($message);
    }
}
