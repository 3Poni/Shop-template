<div class="main-content">
    <div class="action-list">
        <div class="action"><h2><a href="/admin/items/create">Добавить товар</a></h2></div>
        <div class="main">
            <div class="items-list">
                <table class="table">
                <?php
                foreach($items as $item) {
                    echo '<tr class="table-row">';
                    echo '<td class="table-d"><a href="/admin/items/show/?id='.$item['id'].'">'.$item['name'].'</a><br></td>';
                    echo '<td class="table-d"><a href="/admin/items/show/?id='.$item['id'].'">Посмотреть товар</a></td>';
                    echo '<td class="table-d"><a href="/admin/items/edit/?id='.$item['id'].'">Редактировать товар</a></td>
                          <td class="table-d"><form action="/admin/items/delete" method="post">
                                    <input type="hidden" name="id" value="'.$item['id'].'">
                                    <input type="hidden" name="image" value="'.$item['image'].'">
                                    <input type="submit" value="Удалить"></li>
                               </form></td>

                   </tr>';
                }?>
                </table>
            </div>
        </div>
    </div>
</div>