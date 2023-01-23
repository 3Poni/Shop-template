<div class="main-content">
    <div class="action-list">
        <div class="action"><h2><a href="/admin/users/create">Добавить пользователя</a></h2></div>
        <div class="main">
            <div class="items-list">
                <table class="table">
                <?php
                foreach($users as $user) {
                    echo '<tr class="table-row">';
                    echo '<td class="table-d"><span>'.$user['login'].'</span></td>';
                    echo '<td class="table-d"><a href="/admin/users/show/?id='.$user['id'].'">Посмотреть пользователя</a></td>';
                    echo '<td class="table-d"><a href="/admin/users/edit/?id='.$user['id'].'">Редактировать пользователя</a></td>
                          <td class="table-d"><form action="/admin/users/delete" method="post">
                                    <input type="hidden" name="id" value="'.$user['id'].'">
                                    <input type="submit" value="Удалить"></li>
                               </form></td>

                   </tr>';
                }?>
                </table>
            </div>
    </div>
</div>
</div>
