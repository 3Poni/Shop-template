<div class="main-content">
        <div class="action-list">
            <div class="action"><a href="/admin/users/edit/?id=<?php echo $user['id']; ?>">Редактировать пользователя</a></div>
            <div class="main">
                    <table class="table">
                        <tr class="table-row" style="background-color: lightcyan">
                            <td class="table-d"><span><h2>Логин</h2></span></td>
                            <td class="table-d"><span><h2>Email</h2></span></td>
                            <td class="table-d"><span><h2>Роль</h2></span></td>
                            <td class="table-d"></td>
                        </tr>
                        <?php
                            echo '<tr class="table-row">';
                            echo '<td class="table-d"><span>'.$user['login'].'</span></td>';
                            echo '<td class="table-d"><span>'.$user['email'].'</span></td>';
                            if($user['role_id'] == 0) { echo '<td class="table-d"><span>Пользователь</span></td>'; } else { echo '<td class="table-d"><span>Администратор</span></td>'; }
                            echo '<td class="table-d"><form action="/admin/users/delete" method="post">
                                            <input type="hidden" name="id" value="'.$user['id'].'">
                                            <input type="submit" value="Удалить"></li>
                                       </form></td>
        
                           </tr>'; ?>
                    </table>
            </div>
        </div>
</div>
