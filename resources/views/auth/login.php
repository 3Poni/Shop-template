<?php
$_SESSION['token'] = bin2hex(random_bytes(32));
?>
 <br>
    <div class="main">
        <div><h2>Форма входа</h2></div><br>
            <?php
            if(isset($_SESSION['admin'])){
                echo '<div class="nav-itm">
                <a href="/admin" class="menu">Личный кабинет администратора</a>
                </div>';
                echo 'Вы - Администратор';
                echo "<br><br><b><a href='/logout'>Выйти</a></b>";
                }
                elseif(isset($_SESSION['user'])){;
                    echo '<div class="nav-itm">
                <a href="/user" class="menu">Личный кабинет пользователя</a>
                </div>';
                    echo 'Вы - Пользователь с логином: '.$_SESSION['user']['login'];
                   echo "<br><br><b><a href='/logout'>Выйти</a></b>";
                }
            else{
                echo '
                <form class="form" action="/login" method="post">
                     <input type="hidden" name="token" id="token" value="'.$_SESSION['token'].'">
                     <label for="login">Логин</label><br>
                     <input class="input-text" type="text" oninput="validate(this)" id="login" name="login" placeholder="введите ваш логин"><br>
                     <label for="login">Пароль</label><br>
                     <input type="password" id="pass" name="pass" placeholder="введите ваш пароль"><br><br>
                     <input class="button-submit" type="submit" value="Войти">
                </form><br><br>
                <div style="color: green"><h3><a href="/register">Зарегистрироваться</a></h3></div>
                ';
            }
            ?>
    </div>
<script>
    function validate(el)
    {
        let a = el.value
            console.log(a)
    }
</script>