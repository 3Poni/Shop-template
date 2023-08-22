<?php

namespace Vendor\Pagination;

class Pag
{
    private int $id = 0;
    private int $num_page = 1;
    private int $start;
    private int $page;
    private int $per_page;
    private array $items;
    private PagRenderInterface $pagRender;
    public function __construct(array $items, int $per_page, PagRenderInterface $pagRender)
    {
        $this->items = $items;
        $this->per_page = $per_page;
        $this->page = $_GET['page'] ?? 0;
        $this->start = $this->page == 0 ? 0 : ($this->per_page * $this->page);
        $this->pagRender = $pagRender;
    }

    private function countItems($items): int
    {
        return count($items);
    }

    private function countPages($total, $per_page): int
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
        $count_pages = $this->countPages($this->countItems($this->items), $this->per_page);
        for ($i = 0; $i < $count_pages; $i++) {
            $uri = preg_split('/.page=./', $_SERVER['REQUEST_URI']);
            $num = count($uri) - 1;

            switch (1) {
                case preg_match('/\?(?!page)/', $_SERVER['REQUEST_URI']):
                    $uri[$num] .= "&";
                    break;
                default:
                    $uri[$num] .= "?";
            }

            if($i === $this->page){

                $this->pagRender->addLink($uri, $this->id, $this->num_page, 'active');

            }else{

                $this->pagRender->addLink($uri, $this->id, $this->num_page);

            }
            $this->num_page++;
            $this->id++;
        }
        return $this->pagRender->getLinks();
    }

    public function __toString(): string
    {
        return $this->links();
    }

}