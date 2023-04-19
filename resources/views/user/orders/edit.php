<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/user">Главная</a></li>
                <li><a href="/user/orders">Заказы</a></li>
                <?php
                 echo '<li class="active"><a href="/user//edit/?id=' . $user['id'] . '">Редактирование</a></li>';
                ?>
            </ol>
            <div class="page-heading">
                <h1>Заказы пользователя</h1>
                <div class="options">
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
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
