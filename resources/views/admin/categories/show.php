<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/categories">Категории</a></li>
                <li class="active"><a href="/admin/categories/edit/?id=<? echo $categories[0]['id']; ?>">Просмотр категории</a></li>
            </ol>
            <div class="page-heading">
                <h1>Категории</h1>
                <div class="options">
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Таблица данных категории</h2>
                            </div>
                            <div class="panel-body">

                                <div class="main-content">
                                    <div class="container-show">
                                        <div class="name"><h1> <?php echo $categories['name']; ?></h1></div>
                                        <div class="action">
                                            <a href="/admin/categories/edit/?id=<?php echo $categories['id'];?>">
                                                <button>Редактировать категорию</button>
                                            </a>
                                        </div>
                                        <div class="action mt-md">
                                            <form action="/admin/categories/delete" method="post">
                                                <input type="hidden" name="id" value="<?php echo $categories["id"]; ?>">
                                                <input type="submit" value="Удалить Категорию">
                                            </form>
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

