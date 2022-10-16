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
                <option selected="selected" disabled>Выберите категорию</option>
                <option value='1'>Администратор</option>
                <option value='0'>Пользователь</option>
            </select><br><br>
            <input type="submit" value="Создать">
        </form>
    </div>
</div>
