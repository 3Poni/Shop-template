<?php

declare(strict_types=1);


namespace App\Middleware;

use App\Contracts\MiddlewareInterface;

class UserMiddleware implements MiddlewareInterface
{
    public function process(): bool
    {
        if(!isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
}