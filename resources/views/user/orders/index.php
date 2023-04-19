<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="/user">Главная</a></li>
                <li><a href="/user/orders">Заказы</a></li>
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
                                                    <td class="table-d"><span><h2>Номер заказа</h2></span></td>
                                                    <td class="table-d"><span><h2>Сумма заказа</h2></span></td>
                                                    <td class="table-d"><span><h2>Кнопка оплаты</h2></span></td>
                                                    <td class="table-d"><span></span></td>
                                                    <td class="table-d"><span></span></td>
                                                </tr>
                                                <?php
                                                foreach ($orders as $order) {
                                                    echo '<tr class="table-row">';
                                                    echo '<td class="table-d"><span>'.$order['id'].'</span></td>';
                                                    echo '<td class="table-d"><span>'.$order['sum'].' руб.</span></td>';
                                                    if($order['status'] === 'not paid') {
                                                        echo '<td class="table-d"><span><a href="/user/orders/pay/?id='.$order['id'].'">Оплатить</a></span></td>';
                                                    }else {
                                                        echo '<td class="table-d"><span>Оплачен</span></td>';

                                                    }
                                                    echo '<td class="table-d"><a href="/user/orders/show/?id='.$order['id'].'">Посмотреть заказ</a></td>';
                                                    echo '<td class="table-d">
                                                              <form action="/admin/orders/delete" method="post">
                                                                   <input type="hidden" name="id" value="'.$order['id'].'">
                                                                   <input type="submit" value="Удалить"></li>
                                                              </form>
                                                          </td>
                                                          </tr>';} ?>
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




