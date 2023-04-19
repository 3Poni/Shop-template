<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/user">Главная</a></li>
                <li><a href="/user/orders">Заказы</a></li>
                <?php
                echo '<li class="active"><a href="/user/orders/show/?id='.$order['id'].'">Просмотр заказа</a></li>';
                ?>
            </ol>
            <div class="page-heading">
                <h1>Заказы пользователя</h1>
                <div class="options">
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="main-content">
                                <div class="action-list">
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
                                                    <td class="table-d"><span><h3><?php echo $order['sum']; ?></h3></span></td>
                                                    <td class="table-d"></td>
                                                </tr>
                                                <tr class="table-row" style="background-color: lightcyan">
                                                    <td class="table-d"><span><h2>Статус заказа: </h2></span></td>
                                                    <td class="table-d"><span><h3><?php echo $order['status']; ?></h3></td>
                                                    <td class="table-d"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .container-fluid -->
        </div> <!-- #page-content -->
    </div>
    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li><h6 style="margin: 0;"> &copy; 2022 3Poni</h6></li>
            </ul>
            <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i
                        class="fa fa-arrow-up"></i></button>
        </div>
    </footer>
</div>

