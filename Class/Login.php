<?php

namespace Class;

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
            throw new UserNotVerifiedException();
        }
        if ($this->user->isBan()) {
            throw new UserIsBanException();
        }
        return true;
    }
}
