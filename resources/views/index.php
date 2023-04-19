<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Основная информация</h3>
                </div>
            </div>
            <!-- /section title -->
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- products -->
                                <?php foreach($items as $item){
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
                                                     <input type="hidden" id="name' . $item['id'] . '" name="id" value="' . $item['id'] . '">
                                                     <button class="add-to-cart-btn" value="' . $item['id'] . '" type="button">
                                                     <i class="fa fa-shopping-cart"></i>В КОРЗИНУ</button>
                                                 </div>';
                                    }
                                    echo '<div class="product">
                                    <div class="product-img">
                                        <img src="/storage/images/'.$item['image'].'" alt="item-img" width="200" height="200">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="'.$item['id'].'">'.$item['name'].'</a></h3>
                                        <h4 class="product-price">'.$item['price'].' руб. <del class="product-old-price">'.$item['price'] + 1000 .'</del></h4>
                                    </div>
                                    '. $cart .'
                                </div>';
                                }
                                ?>
                                <!-- /products -->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>