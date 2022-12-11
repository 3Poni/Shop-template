<div class="main"><br>
    <h1>Корзина</h1>
    <div class="cart">
        <div>
            <ol>
                <?php
                if(!empty($_SESSION['cart'])){
                    foreach($items as $item) {
                        echo '<div class="item-cart"><li><h2><a href="/show?id='.$item['id'].'">'.$item['name'].'</a></h2><br>';
                        echo "<div id='qty'>Количество штук:".$item['qty'].'</div><br>';
                        echo "Цена:".$item['price'].'<br>';
                        echo "Сумма:".$item['price']*$item['qty'];
                        echo '<form method="post" action="/cart/add">
                        <input type="hidden" name="id" value="'.$item['id'].'">
                        <input class="button-submit" type="submit" value="Добавить в коризну"></form>
                    ';
                        echo '<form method="post" action="/cart/delete">
                        <input type="hidden" name="id" value="'.$item['id'].'">
                        <input class="button-submit" type="submit" value="Удалить из коризны"></li>
                    </div></form>';
                    }
                    ?>
            </ol><hr>
            <?php echo '
                <div class="item-cart">
                    <ul>
                        <li>Общее количество товаров: ' . ($_SESSION['cart.qty']).'</li>
                        <li>Итого:' . $sum.'</li>
                        <form method="post" action="/cart/buy">';
                                foreach ($items as $item) {
                            echo '<input type="hidden" name="'.$item['id'].'" value="'.$item['qty'].'">';
//                            echo '<input type="hidden" name="qty" value="'.$item['qty'].'"><br>';
                        }
                            echo'<input type="hidden" name="sum" value="'.$sum.'">
                            <button class="button-submit" type="submit">Отправить заказ</button>
                        </form>
                    </ul>
                </div> 
        </div>';}  else {
                echo '<br><br><br><h3>*--Корзина пуста--*</h3>';
            } ?>
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