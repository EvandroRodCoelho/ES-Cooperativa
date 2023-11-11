<?php

namespace grupofatec\escooperativa\Model\Infrastructure\Service;

use grupofatec\escooperativa\Model\Domain\Entity\Patrocinador;

class Authenticator
{

    public static function authenticate(Patrocinador|null $user, string $insertedPassword): bool
    {
        $storedPassword = password_hash(' ', PASSWORD_ARGON2ID);
        if ($user) {
            $storedPassword = $user->password;
        }

        return password_verify($insertedPassword, $storedPassword) && !is_null($user);
    }
}