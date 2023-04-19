<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/admin">Главная</a></li>
                <li><a href="/admin/settings">Настройки</a></li>
                <?php
                echo '<li class="active"><a href="/admin/edit/?id=' . $admin['id'] . '">Редактирование</a></li>';
                ?>
            </ol>
            <div class="page-heading">
                <h1>Настройки</h1>
                <div class="options">
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Форма редактирования</h2>
                            </div>
                            <div class="panel-body">
                                <div class="main-content">
                                    <form action="/admin/update" method="post" enctype="multipart/form-data">
                                        <input type="hidden" id="id" name="id" value="<?php echo $admin['id']; ?>">
                                        <label for="login">Логин</label><br>
                                        <input type="text" id="login" name="login" value="<?php echo $admin['login']; ?>"><br>
                                        <label for="email">Email</label><br>
                                        <input type="email" id="email" name="email" value="<?php echo $admin['email']; ?>"><br><br>
                                        <input type="submit" value="Обновить">
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



