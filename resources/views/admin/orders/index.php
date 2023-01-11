<div class="main-content">
    <div class="action-list">
        <div class="main">
            <div class="items-list">
                <table class="table">
                    <tr class="table-row" style="background-color: lightcyan">
                        <td class="table-d"><span><h2>Номер заказа</h2></span></td>
                        <td class="table-d"><span><h2>Сумма заказа</h2></span></td>
                        <td class="table-d"><span></span></td>
                        <td class="table-d"><span></span></td>
                        <td class="table-d"><span></span></td>
                    </tr>
                <?php
                foreach($orders as $order) {
                    echo '<tr class="table-row">';
                    echo '<td class="table-d"><span>'.$order['id'].'</span></td>';
                    echo '<td class="table-d"><span>'.$order['sum'].' руб.</span></td>';
                    echo '<td class="table-d"><span></span></td>';
                    echo '<td class="table-d"><a href="/admin/orders/show/?id='.$order['id'].'">Посмотреть заказ</a></td>';
                    echo '     <td class="table-d"><form action="/admin/orders/delete" method="post">
                                    <input type="hidden" name="id" value="'.$order['id'].'">
                                    <input type="submit" value="Удалить"></li>
                               </form></td>

                   </tr>';
                }?>
                </table>
            </div>
    </div>
</div>
</div>