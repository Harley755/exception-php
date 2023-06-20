<?php

namespace Class\Exceptions;

use Exception;

class UserExceptions extends Exception
{
    public static function notVerified(): static
    {
        return new static('Utilisateur non vérifié (static)');
    }
}
