<?php

declare(strict_types=1);

namespace Vendor\Pagination;

class HtmlPag implements PagRenderInterface
{
    public ?string $html= null;

    public function addLink(array|string $uri,int $id,int $num_page, $htmlClass = null): HtmlPag
    {
        $this->html .= '<li class="' . $htmlClass . '"><a href=" ' . implode($uri) . 'page=' . $id . '">' . $num_page . '</a></li>';
        return $this;
    }

    public function getLinks(): string
    {
        return $this->html;
    }
}

