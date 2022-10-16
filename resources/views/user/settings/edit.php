<div class="main-content">
    <form action="/user/update" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id" value="<?php echo $user[0]; ?>">
        <label for="name">Логин</label><br>
        <input type="text" id="login" name="login" value="<?php echo $user[1]; ?>"><br>
        <label for="desc">Email</label><br>
        <input type="email" id="email" name="email" value="<?php echo $user[3]; ?>"><br><br>
        <input type="submit" value="Обновить">
    </form>
</div>
