<div class="main-content">
    <div class="action-list">
        <div class="action"><h2><a href="/admin/categories/create">Добавить категорию</a></h2></div><hr>
        <div class="main">
            <div class="items-list">
                <table class="table">
                <?php
                foreach($categories as $category) {
                    echo '<tr class="table-row">';
                    echo '<td class="table-d"><span>'.$category['name'].'</span></td>';
                    echo '<td class="table-d"><a href="/admin/categories/show?id='.$category['id'].'">Посмотреть категорию</a></td>';
                    echo '<td class="table-d"><a href="/admin/categories/edit?id='.$category['id'].'">Редактировать категорию</a></td>
                          <td class="table-d"><form action="/admin/categories/delete" method="post">
                                    <input type="hidden" name="id" value="'.$category['id'].'">
                                    <input type="submit" value="Удалить"></li>
                               </form></td>

                   </tr>';
                }?>
                </table>
            </div>
        </div>
    </div>
</div>