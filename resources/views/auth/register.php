<?php
    if(isset($_SESSION['admin']) || isset($_SESSION['user']) ){
    echo '<br><p class="main"> Вы уже зарегистрированы ! ! ! </p><br>';
    echo "<a class='main' href='/logout'>Выйти</a>";
    }
    else{
        echo '<br>
<div class="main">
    <div><h1>Форма регистрации</h1></div>
    <form class="form" action="/register" method="post">
        <label for="login">Логин</label><br>
        <input class="input-text" type="text" oninput="validate(this)" id="login" name="login"><br>
        <label for="pass">Пароль</label><br>
        <input type="password" id="pass" name="pass"><br><br>
        <input class="button-submit" type="submit"  id="submit" disabled="disable">
    </form>
</div>'; }?>
    <script>
        function validate(el)
        {
            let a = el.value
            console.log(a)
            if( a.length < 3) {
                console.log('Логин слишком короткий')
                document.getElementById('submit').setAttribute('disabled', 'disabled')
            }else {
                document.getElementById('submit').removeAttribute('disabled')
            }
        }
    </script>
