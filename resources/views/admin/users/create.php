<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/users">Пользователи</a></li>
                <li class="active"><a href="/admin/users/create">Создание пользователя</a></li>
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
                                <h2>Форма создания пользователя</h2>
                            </div>
                            <div class="panel-body">
                                <div class="main-content">
                                    <div class="form-group">
                                        <form action="/admin/users/store" method="post" enctype="multipart/form-data">
                                            <label for="login">Логин пользователя</label><br>
                                            <input type="text" id="login" name="login" ><br>
                                            <label for="password">Пароль пользователя</label><br>
                                            <input type="password" id="password" name="password" ><br>
                                            <label for="email">Email пользователя</label><br>
                                            <input type="email" id="email" name="email" ><br><br>
                                            <select required id="role_id" name="role_id">
                                                <option selected="selected" disabled>Выберите роль</option>
                                                <option value='1'>Администратор</option>
                                                <option value='0'>Пользователь</option>
                                            </select><br><br>
                                            <input type="submit" value="Создать">
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




