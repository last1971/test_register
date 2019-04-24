<?php


namespace App\Services;


use App\User;
use Carbon\Carbon;
use Laravel\Passport\Passport;

class PassportService
{
    public static function token(User $user, string $grant = 'password')
    {
        Passport::personalAccessTokensExpireIn(Carbon::now()->addDays(1));
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(2));
        return $user->createToken(ucfirst($grant) .' Grant Client')->accessToken;
    }
}