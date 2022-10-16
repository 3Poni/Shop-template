 <div class="main"><br>
            <div class="sort-menu">Сортировать по цене:
                <a href="/items/sort?by=price&method=DESC">по убыванию</a>
                /
                <a href="/items/sort?by=price&method=ASC">по возрастанию</a>
            </div>
            <div class="items-list">
            <?php
            foreach($items as $item) {
            echo '<div class="item-content">
                          <div class="item-img"><img src="/storage/images/'.$item[4].'" width="200" height="190"></div>
                          <div class="item-text"><h3><a href="/show?id='.$item[0].'">'.$item[1].'</a></h3></div>
                          <div ><span>'.$item[5].' руб.</span></div>
                          <div onclick="AddToCart(this)" class="btn-cart">
                              <input type="hidden" id="name'.$item[0].'" name="id" value="'.$item[0].'">
                              <button class="btn-cart-add" type="button" value="'.$item[0].'">В КОРЗИНУ</button>
                          </div>
                   </div>';
                }?>
            </div>
            <div class="pages-list">
                <?php echo $pagination; ?>
            </div><br>
 </div>
<script src="/js/myscript.js"></script>