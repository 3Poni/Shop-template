<div class="main-content">
    <form action="/user/update" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id" value="<?php echo $user['id']; ?>">
        <label for="login">Логин</label><br>
        <input type="text" id="login" name="login" value="<?php echo $user['login']; ?>"><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
        <input type="submit" value="Обновить">
    </form>
</div>
