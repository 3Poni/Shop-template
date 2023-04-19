<div class="section">
    <div class="container">
        <div class="row">
            <div class="billing-details"><br>
                <h1>Корзина</h1>
                <div class="cart">
            <ol>
                <?php
                if(!empty($_SESSION['cart'])){
                    foreach($items as $item) {
                        echo '<div class="item-cart"><li><h2><a href="items/show/?id='.$item['id'].'">Товар -  '.$item['name'].'</a></h2><br>';
                        echo "<div id='qty'>Количество штук:  ".$item['qty'].'</div><br>';
                        echo "Цена: " .$item['price'].'<br>';
                        echo "Сумма: " .$item['price']*$item['qty'];
                        echo '<form method="post" action="/cart/add">
                        <input type="hidden" name="id" value="'.$item['id'].'">
                        <input class="btn button-submit" type="submit" value="Добавить в коризну" style="margin-top: 10px"></form>
                    ';
                        echo '<form method="post" action="/cart/delete">
                        <input type="hidden" name="id" value="'.$item['id'].'">
                        <input class="btn button-submit" type="submit" value="Удалить из коризны" style="margin-top: 10px"></li>
                    </div></form>';
                    }
                    ?>
            </ol><hr>
            <?php echo '
                <div class="item-cart">
                    <ul>
                        <li>Общее количество товаров: ' . ($_SESSION['cart.qty']).'</li>
                        <li>Итого: ' . $sum.'</li>
                        <form method="post" action="/cart/buy">';
                                foreach ($items as $item) {
                            echo '<input type="hidden" name="'.$item['id'].'" value="'.$item['qty'].'">';
                        }
                            echo'<input type="hidden" name="sum" value="'.$sum.'">
                            <button class="primary-btn button-submit" type="submit" style="margin-top: 10px">Отправить заказ</button>
                        </form>
                    </ul>
                </div> 
        </div>';}  else {
                echo '<h3 style="margin-top: 80px">Корзина пуста</h3>';
            } ?>
    </div>
 </div>
        </div>
    </div>
</div>
    <script>
        function minCart(el) {
            console.log()
            if (el.parentNode.childNodes[7].value > 0) {
                const xhr = new XMLHttpRequest()
                xhr.open('POST', '/cart/delete', true)
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
                xhr.onload = function () {
                    el.parentNode.childNodes[7].value--
                    this.responseText
                }
                let params = el.parentNode.childNodes[7].id
                xhr.send(params)
            }else {
            }
        }

        function plusCart(el) {
            const xhr = new XMLHttpRequest()
            xhr.open('POST', '/cart/add', true)
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
            xhr.onload = function () {
                el.previousSibling.value++
                document.getElementById('cart').innerHTML = '<a href="/cart" class="menu">Корзина: ' + this.responseText + '</a>'
            }
            let params = "id=" + el.previousSibling.id
            xhr.send(params)
        }
    </script>