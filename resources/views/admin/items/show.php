<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/items">Товары</a></li>
                <li class="active"><a href="/admin/items/show/?id=<? echo $item[0]['id']; ?>">Просмотр товара</a></li>
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
                                <h2>Данные товара</h2>
                            </div>
                            <div class="panel-body">
                                <div class="main-content">
                                    <div class="action-list">

                                        <div class="main">
                                            <div class="item-show">
                                        <div class="item-name"><h1><?php echo $item["name"]; ?></h1><br>
                                        </div>
                                        <div class="item-image">
                                            <img class="item-img" alt="картинка" src="/storage/images/<?php echo $item["image"]; ?>" width="300" height="300">
                                        </div>
                                        <div class="item-desc">
                                            <span><?php if(!$item["description"]) { echo "Описание отсутствует"; } else {   echo $item["description"];} ; ?></span>
                                        </div>
                                        <div class="item-price">
                                            <h4>Цена: <?php echo $item["price"]; ?> рублей</h4>
                                        </div>
                                        <div class="action">
                                            <a href="/admin/items/edit/?id=<?php echo $item['id'];?>">
                                                <button>Редактировать товар</button>
                                            </a>
                                        </div>
                                        <div class="action mt-md">
                                            <form action="/admin/items/delete" method="post">
                                                <input type="hidden" name="id" value="<?php echo $item["id"]; ?>">
                                                <input type="submit" value="Удалить Товар">
                                            </form>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
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
