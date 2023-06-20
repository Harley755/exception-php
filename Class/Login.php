<?php

namespace Class;

use Class\Exceptions\UserExceptions;
use Class\Exceptions\UserIsBanException;
use Exception;
use Class\User;
use Class\Exceptions\UserNotVerifiedException;

class Login
{
    public function __construct(
        protected User $user
    ) {
    }

    public function login(): bool
    {
        if (!$this->user->isVerified()) {
            // throw new UserNotVerifiedException();
            throw UserExceptions::notVerified();
        }
        // if ($this->user->isBan()) {
        //     throw new UserIsBanException();
        // }
        return true;
    }
}
