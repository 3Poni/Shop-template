<?php
if (!empty($_SESSION['cart'][$items[0]['id']])) {
    $cart = '<div class="add-to-cart">
              <div class="cart-stepper">
              <input onclick="minCart(this)" class="btn-qty" type="button"  value="-">
              <input type="text" id="' . $items[0]['id'] . '" class="text-qty" value="' . $_SESSION['cart'][$items[0]['id']]['qty'] . '" disabled>
               <input onclick="plusCart(this)" class="btn-qty" type="button"   value="+">
               </div>
              </div>';
} else {
    $cart = '<div onclick="addToCart(this)" class="add-to-cart">
              <input type="hidden" id="name' . $items[0]['id'] . '" name="id" value="' . $items[0]['id'] . '">
              <button class="cart-btn" value="' . $items[0]['id'] . '" type="button">
             <i class="fa fa-shopping-cart"></i> В КОРЗИНУ</button>
              </div>';
}
?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="/storage/images/<?php echo $items[0]["image"]; ?>" alt="картинка товара" width="300"
                             height="300">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                </div>
            </div>
            <!-- Product details -->
            <div class="col-md-5">

                <div class="product-details">
                    <h2 class="product-name"><?php echo $items[0]["name"]; ?></h2>
                    <div>
                        <h3 class="product-price"><?php echo $items[0]["price"]; ?> рублей</h3>
                    </div>
                    <p><?php echo $items[0]["description"]; ?></p>
                    <?php
                    echo $cart;
                    ?>
                </div>
            </div>
        </div>
        <!-- /Product details -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>