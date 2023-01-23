<?php
    if(isset($_SESSION['admin']) || isset($_SESSION['user']) ){
    echo '<br><p class="main"> Вы уже зарегистрированы ! ! ! </p><br>';
    echo "<a class='main' href='/logout'>Выйти</a>";
    }
    else{
        echo '<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-7">
    <div class="section-title"><h3 class="title">Форма регистрации</h3></div>
        <form class="form" action="/register" method="post">
                    <div class="form-group">
                        <label for="login">Логин</label><br>
                        <input class="input" type="text" oninput="validate(this)" id="login" name="login" placeholder="Введите Ваш логин">
                    </div>
                    <div class="form-group">
                        <label for="pass">Пароль</label><br>
                        <input class="input" type="password" id="pass" name="pass" placeholder="Введите Ваш пароль">
                    </div>
                    <div>
                        <input class="primary-btn order-submit" type="submit" value="Зарегистрироваться">
                    </div>
                </div>
                </div>
                </form>
                </div>
                </div>
                </div>
                </div>
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
