<?php

declare(strict_types=1);


namespace Vendor\Pagination;

interface PagRenderInterface
{
    public function addLink(array|string $uri, int $id, int $num_page): PagRenderInterface;
    public function getLinks(): string;

}