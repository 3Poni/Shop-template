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
                        <img src="/storage/images/<?php echo $items[0]["image"]; ?>" alt="картинка товара" width="300" height="300">
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
                    </div>
                </div>
            </div>
            <!-- /Product details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>