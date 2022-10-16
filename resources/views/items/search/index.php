 <div class="main"><br>
            <div class="sort-menu"><h3><span>Результаты поиска</span></h3></div>
            <div class="items-list">
            <?php
            foreach($items as $item) {
            echo '<div class="item-content">
                    <div class="item-img"><img></div>  ';
                    echo '<div class="item-text"><h3><a href="/edit?id='.$item[0].'">'.$item[1].'</a></h3></div>';
                    echo '<div onclick="AddToCart(this)" class="btn-cart">
                              <input type="hidden" id="name'.$item[0].'" name="id" value="'.$item[0].'">
                              <button class="btn-cart-add" type="button" value="'.$item[0].'">В КОРЗИНУ</button>
                          </div>
                   </div>';}?>
            </div>
            <div class="pages-list">
                <?php echo $pagination; ?>
            </div><br>
            <div class="nav-cart" id="cart">
                <a href="/cart" class="menu">Корзина: <?php if(!empty($_SESSION['cart'])){ echo ($_SESSION['cart.qty']);} ?></a>
            </div>
        </div>
 <script src="/js/myscript.js"></script>
