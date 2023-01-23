<div class="main-content">
    <div class="action-list">
        <div class="action"><h2><a href="/admin/users/show/?id=<?php echo $user['id'] ?> ">Заказ оформил: <?php echo $user['login']; ?></a></h2></div>
        <div class="main">
            <div class="items-list">
                <table class="table">
                    <tr class="table-row" style="background-color: lightcyan">
                        <td class="table-d"><span><h2>Наименование товара</h2></span></td>
                        <td class="table-d"><span><h2>Цена за единицу</h2></span></td>
                        <td class="table-d"><span><h2>Количество единиц</h2></span></td>
                    </tr>
                    <?php
                        foreach ($items as $item) {
                            echo '<tr class="table-row">';
                            echo '<td class="table-d"><span>' . $item['name'] . '</span></td>';
                            echo '<td class="table-d"><span>' . $item['price'] . ' руб.</span></td>';
                            echo '<td class="table-d"><span>' . $item['qty'] . ' шт.</span></td>
                           </tr>';
                    }?>
                    <tr class="table-row" style="background-color: lightcyan">
                        <td class="table-d"><span><h2>Итого: </h2></span></td>
                        <td class="table-d"><span><h2><?php echo $order['sum'];?></h2></span></td>
                        <td class="table-d"></td>
                    </tr>
                    <tr class="table-row" style="background-color: lightcyan">
                        <td class="table-d"><span><h2>Статус заказа: </h2></span></td>
                        <td class="table-d"><span><h2><?php echo $order['status'];?></h2></span></td>
                        <td class="table-d"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>