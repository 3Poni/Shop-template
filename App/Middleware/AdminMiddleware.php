<?php

declare(strict_types=1);


namespace App\Middleware;

use App\Contracts\MiddlewareInterface;

class AdminMiddleware implements MiddlewareInterface
{
    public function process(): bool
    {
        if(!isset($_SESSION['admin'])) {
            return false;
        }
        return true;
    }
}