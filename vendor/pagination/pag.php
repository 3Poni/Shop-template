<?php

namespace Vendor\Pagination;

class Pag
{

    public int $count_pages;
    public int $id = 0;
    public int $num_page = 1;
    public int $start;
    public int $page;
    public int $total;
    public int $per_page;
    public array $items = array();

    public function __construct(array $items, int $per_page)
    {
        $this->items = $items;
        $this->per_page = $per_page;
        $this->page = $_GET['page'] ?? 0;
        $this->start = $this->page == 0 ? 0 : ($this->per_page * $this->page);
        $this->total = $this->totalCount($items);
        $this->count_pages = $this->countPages($this->total, $this->per_page);
    }

    public function totalCount($items): int
    {
        return count($items);
    }

    public function countPages($total, $per_page): int
    {
        return ceil($total / $per_page);
    }

    public function paginated(): array
    {
        return $items = array_slice($this->items, $this->start, $this->per_page);
    }

    public function setPerPage($per_page)
    {
        return $this->per_page = $per_page;
    }

    public function links(): string
    {
        $html = '';
        for ($i = 0; $i < $this->count_pages; $i++) {
            $uri = preg_split('/.page=./', $_SERVER['REQUEST_URI']);
            $num = count($uri) - 1;
            switch (1) {
                case preg_match('/\?(?!page)/', $_SERVER['REQUEST_URI']):
                    $uri[$num] .= "&";
                    break;
                default:
                    $uri[$num] .= "?";
            }
            $html .= '<div class="page-item"><a href=" ' . implode($uri) . 'page=' . $this->id . '">-' . $this->num_page . '-</a></div>';
            $this->num_page++;
            $this->id++;
        }
        return $html;

    }

    public function __toString(): string
    {
        return $this->links();
    }

}