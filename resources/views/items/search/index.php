 <div class="main"><br>
            <div class="sort-menu"><h3><span>Результаты поиска</span></h3></div>
            <div class="items-list">
            <?php
            foreach($items as $item) {
            echo '<div class="item-content">
                    <div class="item-img"><img src="/storage/images/'.$item['image'].'"  width="200" height="190"></div>  ';
                    echo '<div class="item-text"><h3><a href="/items/show/?id='.$item['id'].'">'.$item['name'].'</a></h3></div>';
                    echo '<div class="itm-price"><span>'.$item['price'].' руб.</span></div>';
                    echo '<div onclick="addToCart(this)" class="btn-cart">
                              <input type="hidden" id="name'.$item['id'].'" name="id" value="'.$item['id'].'">
                              <button class="btn-cart-add" type="button" value="'.$item['id'].'">В КОРЗИНУ</button>
                          </div>
                   </div>';}?>
            </div>
            <div class="pages-list">
                <?php echo $pagination; ?>
            </div><br>
        </div>
 <script src="/js/script.js"></script>
