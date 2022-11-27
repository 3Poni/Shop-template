<div class="main-content">
    <div class="action-list">
        <div class="main">
            <div class="items-list">
                <table class="table">
                    <tr class="table-row" style="background-color: lightcyan">
                        <td class="table-d"><span><h2>Ваш Логин</h2></span></td>
                        <td class="table-d"><span><h2>Ваш email</h2></span></td>
                        <td class="table-d"><span><h2>Редактирование</h2></span></td>
                        <td class="table-d"><span><h2>Удаление</h2></span></td>
                    </tr>
                <?php
                    echo '<tr class="table-row">';
                    echo '<td class="table-d"><span>'.$user['login'].'</span></td>';
                    echo '<td class="table-d"><span>'.$user['email'].'</span></td>';
                    echo '<td class="table-d"><a href="/user/edit?id='.$user['id'].'">Редактировать данные</a></td>';
                    echo '<td class="table-d">
                            <form action="/user/delete" method="post">
                               <input type="hidden" name="id" value="'.$user['id'].'">
                               <input type="submit" value="Удалить аккаунт"></li>
                            </form></td>
                          </tr>'; ?>
                </table>
            </div>
    </div>
</div>
</div>