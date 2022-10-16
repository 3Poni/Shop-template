<div class="main-content">
    <form action="/admin/items/store" method="post" enctype="multipart/form-data">
        <label for="name">Наименование товара</label><br>
        <input type="text" id="name" name="name" ><br>
        <label for="desc">Описание товара</label><br>
        <input type="text" id="desc" name="desc" ><br>
        <label for="desc">Стоимость товара</label><br>
        <input type="text" id="price" name="price" ><br><br>
        <select required name="category">
            <option selected="selected" disabled>Выберите категорию</option>
            <?php foreach ($categories as $category){
                echo "<option value='$category[0]'>".$category[1]."</option>";
            }
            ?>
        </select><br><br>
        <label for="image">Изображение товара</label><br>
        <input type="file" id="image" name="image" ><br><br>
        <input type="submit" value="Создать">
    </form>
</div>
