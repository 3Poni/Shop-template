<div class="main"><br>
    <h1>Категории</h1><br>
    <ul><?php foreach ($categories as $category) {
            echo '<li><a href="/category/show?id=' . $category[0] . '">' . $category[1] . ': ' . $db_item->count($category[0], 'category_id')[0][0] . '<a/></li><br>';
        } ?></ul>
</div>
<hr width="100%">
