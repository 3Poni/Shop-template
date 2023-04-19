<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/users">Пользователи</a></li>
                <li class="active"><a href="/admin/users/edit/?id=<? echo $user[0]['id']; ?>">Редактирование пользователя</a></li>
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
                                <h2>Форма редактирования пользователя</h2>
                            </div>
                            <div class="panel-body">
                                <div class="main-content">
                                    <form action="/admin/users/update" method="post">
                                        <input type="hidden" id="id" name="id" value="<? echo $user[0]['id']; ?>">
                                        <label for="name">Логин пользователя</label><br>
                                        <input type="text" id="login" name="login" value="<? echo $user[0]['login'] ?>"><br>
                                        <label for="desc">Email пользователя</label><br>
                                        <input type="text" id="email" name="email" value="<? echo $user[0]['email'] ?>"><br><br>
                                        <label for="role_id">Роль пользователя</label><br>
                                        <select required name="role_id">
                                            <option selected="selected" value="0"><?php if($user[0]['role_id'] == 1){ echo 'Администратор'."</option>"; } else { echo 'Пользователь'."</option>"; } ?>
                                                <?php if($user[0]['role_id'] == 1){ echo '<option value="0">'.'Пользователь'."</option>"; } else { echo '<option value="1">'.'Администратор'."</option>"; } ?>
                                        </select><br><br>
                                        <input type="submit" value="Обновить"><br><br>
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





