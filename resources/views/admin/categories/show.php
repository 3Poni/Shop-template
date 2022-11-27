<div class="main-content">
    <div class="container-show">
        <div class="name"><h1> <?php echo $categories['name']; ?></h1></div>
        <div class="action"><a href="/admin/categories/edit?id=<?php echo $categories['id'];?>">Редактировать категорию</a></div>
        <div class="action">
            <form action="/admin/categories/delete" method="post">
                <input type="hidden" name="id" value="<?php echo $categories["id"]; ?>">
                <input type="submit" value="Удалить Категорию">
            </form>
    </div>
</div>
