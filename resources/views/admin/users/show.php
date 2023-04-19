<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/users">Пользователи</a></li>
                <li class="active"><a href="/admin/users/edit/?id=<? echo $user[0]['id']; ?>">Просмотр пользователя</a></li>
            </ol>
            <div class="page-heading">
                <h1>Пользователи</h1>
                <div class="options">
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Таблица данных пользователя</h2>
                            </div>
                            <div class="panel-body">
                                <div class="main-content">
                                    <div class="action-list">
                                        <div class="action">
                                            <h2>
                                                <a href="/admin/users/edit/?id=<?php echo $user['id']; ?>">Редактировать пользователя</a>
                                            </h2>
                                        </div>
                                        <div class="main">
                                            <table class="table">
                                                <tr class="table-row" style="background-color: lightcyan">
                                                    <td class="table-d"><span><h2>Логин</h2></span></td>
                                                    <td class="table-d"><span><h2>Email</h2></span></td>
                                                    <td class="table-d"><span><h2>Роль</h2></span></td>
                                                    <td class="table-d"></td>
                                                </tr>
                                                <?php
                                                echo '<tr class="table-row">';
                                                echo '<td class="table-d"><span>'.$user['login'].'</span></td>';
                                                echo '<td class="table-d"><span>'.$user['email'].'</span></td>';
                                                if($user['role_id'] == 0) { echo '<td class="table-d"><span>Пользователь</span></td>'; } else { echo '<td class="table-d"><span>Администратор</span></td>'; }
                                                echo '<td class="table-d"><form action="/admin/users/delete" method="post">
                                                                        <input type="hidden" name="id" value="'.$user['id'].'">
                                                                        <input type="submit" value="Удалить"></li>
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







