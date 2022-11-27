<div class="main-content">
    <div class="item-show">
        <div class="item-name"><h1><?php echo $item["name"]; ?></h1><br>
        </div>
        <div class="item-image">
            <img class="item-img" alt="картинка" src="/storage/images/<?php echo $item["image"]; ?>" width="300" height="300">
        </div>
        <div class="item-desc">
            <span><?php if(!$item["description"]) { echo "Описание отсутствует"; } else {   echo $item["description"];} ; ?></span>
        </div>
        <div class="item-price">
            <h2>Цена: <?php echo $item["price"]; ?> рублей</h2><br>
        </div>
        <div class="action"><a href="/admin/items/edit?id=<?php echo $item['id'];?>">Редактировать товар</a></div>
        <div class="action">
            <form action="/admin/items/delete" method="post">
                <input type="hidden" name="id" value="<?php echo $item["id"]; ?>">
                <input type="submit" value="Удалить Товар">
            </form>
        </div>
    </div>

</div>
