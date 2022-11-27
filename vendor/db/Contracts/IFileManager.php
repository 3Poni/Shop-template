<?php

namespace Vendor\DB\Contracts;

interface IFileManager
{
    public function store($file, string $location);

    public function delete($file, string $location);

}