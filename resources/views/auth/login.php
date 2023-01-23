<?php
$_SESSION['token'] = bin2hex(random_bytes(32));
?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
            <!-- row -->
        <div class="row">
            <div class="col-md-7">
                    <!-- Form Details -->
                <div class="row">
                    <div class="billing-details col-md-4 col-xs-6">
                            <div class="section-title">
                                <h3 class="title">Форма входа</h3>
                            </div>
                            <?php
                            if(isset($_SESSION['admin'])){
                                echo '<div class="btn-link">
                                            <a href="/admin" class="menu">Личный кабинет администратора</a>
                                            </div><br>';
                                echo 'Вы - Администратор';
                                echo "<br><a href='/logout'>Выйти</a></b>";
                            }
                            elseif(isset($_SESSION['user'])){;
                                echo '<div class="btn-link">
                                            <a href="/user" class="menu">Личный кабинет пользователя</a>
                                            </div><br><br><br>';
                                echo 'Вы - Пользователь с логином: '.$_SESSION['user']['login'];
                                echo "<br><b><a href='/logout'>Выйти</a></b>";
                            }
                            else{
                                echo '
                            <div>
                            <form class="form" action="/login" method="post">
                            <input type="hidden" name="token" id="token" value="'.$_SESSION['token'].'">
                            <div class="form-group">
                                <input class="input" type="text" id="login" name="login" placeholder="Введите Ваш логин">
                            </div>
                            <div class="form-group">
                                <input class="input" type="password" id="pass" name="pass" placeholder="Введите Ваш пароль">
                            </div>
                            <div>
                                <input class="primary-btn order-submit" type="submit" value="Войти">
                            </div>
                        </div><br>
                            <div class="btn-link mt-md-3">
                                <h3>
                                    <a href="/register">Регистрация</a>
                                </h3>
                            </div>
                        </form>
                        </div
                         ';
                            }
                            ?>
                        <!-- /Form Details -->
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
    <!-- /container -->
    </div>
</div>
<!-- /SECTION -->