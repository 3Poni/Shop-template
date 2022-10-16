<div class="main"><br>
    <h1>Категория: "<?php echo $category['name']; ?>"</h1><br>
    <ul>
        <span><?php foreach($items as $item)
        {
            echo '<li><a href="/show?id='.$item[0].'">'.$item[1].'</a></li><br>';
        } ?>
        </span>
    </ul>
</div>
<hr width="100%">

