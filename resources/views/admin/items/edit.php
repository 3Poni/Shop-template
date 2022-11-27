<div class="main-content">
    <form action="/admin/items/update" id="form-edit" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id" value="<? echo $item['id']; ?>">
        <label for="name">Наименование товара</label><br>
        <input type="text" id="name" name="name" value="<? echo $item['name'] ?>"><br>
        <label for="desc">Стоимость товара</label><br>
        <input type="text" id="price" name="price" value="<? echo $item['price'] ?>"><br><br>
        <select name="category">
            <option disabled>Выберите категорию</option>
            <?php

            foreach ($categories as $category){
                if($category == $item['category_id']){
                    echo "<option selected value='".$category['id']."'>".$category['name']."</option>";
                }else {
                    echo "<option value='".$category['id']."'>" . $category['name'] . "</option>";
                }
            }
            ?>
        </select><br><br>
        <label for="image">Изображение товара</label><br>
        <input type="file" id="image" name="image" value="<? echo $item['image'] ?>"><br><br>
        <input type="submit" value="Обновить"><br><br>
        <label for="desc">Описание товара</label><br>
        <textarea name="desc" form="form-edit">
            <? echo $item['description'] ?>
        </textarea>
    </form>
</div>
