<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/categories">Категории</a></li>
                <li class="active"><a href="/admin/categories/edit/?id=<? echo $user[0]['id']; ?>">Редактирование категории</a></li>
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
                                <h2>Форма редактирования категории</h2>
                            </div>
                            <div class="panel-body">
                                <div class="main-content">
                                    <form action="/admin/categories/update" method="post">
                                        <input type="hidden" id="id" name="id" value="<? echo $category['id']; ?>">
                                        <input type="text" id="name" name="name" value="<? echo $category['name']; ?>">
                                        <button type="submit">Обновить</button>
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

