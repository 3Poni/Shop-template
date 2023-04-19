<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/items">Товары</a></li>
                <li class="active"><a href="/admin/items/edit/?id=<? echo $item[0]['id']; ?>">Редактирование товара</a></li>
            </ol>
            <div class="page-heading">
                <h1>Товары</h1>
                <div class="options">
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Форма редактирования товара</h2>
                            </div>
                            <div class="panel-body">

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
                                        <textarea name="desc" form="form-edit" rows="5" cols="100" wrap="soft">
                                            <? echo $item['description'] ?>
                                        </textarea>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .container-fluid -->
        </div> <!-- #page-content -->
    </div>
    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li><h6 style="margin: 0;"> &copy; 2022 3Poni</h6></li>
            </ul>
            <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i
                        class="fa fa-arrow-up"></i></button>
        </div>
    </footer>
</div>


