<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/categories">Категории</a></li>
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
                                <h2>Таблица категорий</h2>
                            </div>
                            <div class="panel-body">

                                <div class="main-content">
                                    <div class="action-list">
                                        <div class="action"><h2><a href="/admin/categories/create">Добавить категорию</a></h2></div><hr>
                                        <div class="main">
                                            <div class="items-list">
                                                <table class="table">
                                                    <?php
                                                    foreach($categories as $category) {
                                                        echo '<tr class="table-row">';
                                                        echo '<td class="table-d"><span>'.$category['name'].'</span></td>';
                                                        echo '<td class="table-d"><a href="/admin/categories/show/?id='.$category['id'].'">Посмотреть категорию</a></td>';
                                                        echo '<td class="table-d"><a href="/admin/categories/edit/?id='.$category['id'].'">Редактировать категорию</a></td>
                                                              <td class="table-d"><form action="/admin/categories/delete" method="post">
                                                                        <input type="hidden" name="id" value="'.$category['id'].'">
                                                                        <input type="submit" value="Удалить"></li>
                                                                   </form></td>
                                    
                                                       </tr>';
                                                    }?>
                                                </table>
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

