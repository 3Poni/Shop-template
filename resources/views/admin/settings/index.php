<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/settings">Настройки</a></li>
            </ol>
            <div class="page-heading">
                <h1>Настройки администратора</h1>
                <div class="options">
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="main-content">
                                <div class="action-list">
                                    <div class="main">
                                        <div class="items-list">
                                            <table class="table">
                                                <tr class="table-row" style="background-color: lightcyan">
                                                    <td class="table-d"><span><h2>Ваш Логин</h2></span></td>
                                                    <td class="table-d"><span><h2>Ваш email</h2></span></td>
                                                    <td class="table-d"><span><h2>Редактирование</h2></span></td>
                                                    <td class="table-d"><span><h2>Удаление</h2></span></td>
                                                </tr>
                                                <?php
                                                echo '<tr class="table-row">';
                                                echo '<td class="table-d"><span>' . $admin['login'] . '</span></td>';
                                                echo '<td class="table-d"><span>' . $admin['email'] . '</span></td>';
                                                echo '<td class="table-d"><a href="/admin/edit/?id=' . $admin['id'] . '">Редактировать данные</a></td>';
                                                echo '<td class="table-d">
                                                      <form action="/admin/delete" method="post">
                                                        <input type="hidden" name="id" value="' . $admin['id'] . '">
                                                        <input type="submit" value="Удалить аккаунт"></li>
                                                      </form></td>
                                                      </tr>'; ?>
                                            </table>
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


