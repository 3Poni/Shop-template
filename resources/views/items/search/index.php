<div class="section">
    <!-- container -->
    <div class="container">
        <div class="row">
            <!-- STORE -->
            <div id="store" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            <b>Результаты поиска</b>
                        </label>
                    </div>
                </div>
                <!-- /store top filter -->
                <div class="row">
                    <!-- store products -->
                    <!-- product -->
                    <?php
                    foreach($items as $item) {
                        if(!empty($_SESSION['cart'][$item['id']])){
                            $cart = '<div class="add-to-cart">
                                    <div class="cart-stepper">
                                      <input onclick="minCart(this)" class="btn-qty" type="button"  value="-">
                                      <input type="text" id="'.$item['id'].'" class="text-qty" value="'.$_SESSION['cart'][$item['id']]['qty'].'" disabled>
                                      <input onclick="plusCart(this)" class="btn-qty" type="button"   value="+">
                                    </div>
                          </div>';
                        }else{
                            $cart = '<div onclick="addToCart(this)" class="add-to-cart">
                                     <input type="hidden" id="name'.$item['id'].'" name="id" value="'.$item['id'].'">
                                     <button class="add-to-cart-btn" value="'.$item['id'].'" type="button">
                                     <i class="fa fa-shopping-cart"></i>В КОРЗИНУ</button>
                                  </div>';
                        }
                        echo '  <div class="col-md-4 col-xs-6">
                         <div class="product">
                             <div class="product-img">
                                 <img src="/storage/images/'.$item['image'].'" alt="item-img" width="200" height="200">
                                 <div class="product-label">
                                     <span class="sale">-30%</span>
                                     <span class="new">NEW</span>
                                 </div>
                             </div>
                             <div class="product-body">
                                 <h3 class="product-name"><a href="/items/show/?id='.$item['id'].'">'.$item['name'].'</a></h3>
                                 <h4 class="product-price">'.$item['price'].' руб.<del class="product-old-price">'.$item['price'] + 1000 .'</del></h4>
                                 <div class="product-rating">
                                 </div>
                             </div>
                              '. $cart .'
                         </div>
                         </div>
                     ';
                    }?>
                </div>
                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <ul class="store-pagination">
                        <?php echo $pagination; ?>
                    </ul>
                </div>
                <!-- /product -->
            </div>
            <!-- /store products -->
        </div>
    </div>
    <!-- /STORE -->
</div>

