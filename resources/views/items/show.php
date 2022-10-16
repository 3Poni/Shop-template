<br>
<div class="main">
    <div class="item-show">
        <div class="item-name"><h1>
            <?php echo $items[0]["name"]; ?>
        </h1><br>
        </div>
        <div class="item-image">
        <img src="/storage/images/<?php echo $items[0]["image"]; ?>" width="300" height="300">
        </div>
        <div class="item-desc">
        <span><?php echo $items[0]["description"]; ?></span>
        </div>
        <div class="item-price">
        <h2>Цена: <?php echo $items[0]["price"]; ?> рублей</h2><br>
        </div>
    </div>
</div>