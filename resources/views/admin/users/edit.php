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

