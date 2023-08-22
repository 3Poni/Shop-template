<?php

namespace App\Contracts;

interface MiddlewareInterface
{
    public function process(): bool;
}