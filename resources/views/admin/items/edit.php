<div class="main-content">
    <form action="/admin/items/update" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id" value="<? echo $item[0]['id']; ?>">
        <label for="name">Наименование товара</label><br>
        <input type="text" id="name" name="name" value="<? echo $item[0]['name'] ?>"><br>
        <label for="desc">Стоимость товара</label><br>
        <input type="text" id="price" name="price" value="<? echo $item[0]['price'] ?>"><br><br>
        <select name="category">
            <option disabled>Выберите категорию</option>
            <?php foreach ($categories as $category){
                if($category[0] == $item[0]['category_id']){
                    echo "<option selected value='$category[0]'>".$category[1]."</option>";
                }else {
                    echo "<option value='$category[0]'>" . $category[1] . "</option>";
                }
            }
            ?>
        </select><br><br>
        <label for="image">Изображение товара</label><br>
        <input type="file" id="image" name="image" value="<? echo $item[0]['image'] ?>"><br><br>
        <input type="submit" value="Обновить"><br><br>
        <label for="desc">Описание товара</label><br>
        <textarea name="desc" form="form-edit">
            <? echo $item[0]['description'] ?>
        </textarea>
    </form>
</div>
