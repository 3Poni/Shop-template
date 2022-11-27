<div class="main-content">
    <form action="/admin/categories/update" method="post">
        <input type="hidden" id="id" name="id" value="<? echo $category['id']; ?>">
        <input type="text" id="name" name="name" value="<? echo $category['name']; ?>">
        <button type="submit">Обновить</button>
    </form>
</div>
