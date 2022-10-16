<div class="main-content">
    <div class="item-show">
        <div class="item-name"><h1><?php echo $item[0]["name"]; ?></h1><br>
        </div>
        <div class="item-image">
            <img class="item-img" alt="картинка" src="/storage/images/<?php echo $item[0]["image"]; ?>" width="300" height="300">
        </div>
        <div class="item-desc">
            <span><?php if(!$item[0]["description"]) { echo "Описание отсутствует"; } else {   echo $item[0]["description"];} ; ?></span>
        </div>
        <div class="item-price">
            <h2>Цена: <?php echo $item[0]["price"]; ?> рублей</h2><br>
        </div>
        <div class="action"><a href="/admin/items/edit?id=<?php echo $item[0][0];?>">Редактировать товар</a></div>
        <div class="action"><a href="/admin/items/delete">Удалить товар</a></div>
    </div>

</div>
