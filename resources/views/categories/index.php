<div class="main"><br>
    <h1>Категории</h1><br>
    <ul><?php foreach ($categories as $category) {
        if($category['id'] != 1){
        echo '<li><a href="/category/show?id=' . $category['id'] . '">' . $category['name'] . ': ' . $db_item->count($category['id'], 'category_id')[0]['COUNT(*)'] . '<a/></li><br>';
        }
    } ?></ul>
</div>
<hr width="100%">
