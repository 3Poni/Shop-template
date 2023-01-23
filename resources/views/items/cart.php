 <div>
            <ol>
            <?php
            foreach($items as $item) {
                echo '<li><a href="/edit.php?id='.$item['id'].'">'.$item['name'].'</a><br>';
                echo "Количество штук:".$item['qty'];
                echo '<form action="/addToCart" method="post">
                <input type="hidden" name="id" value="'.$item['id'].'">
                <input type="submit" value="Добавить в коризну"></li>
            </form>';
                echo '<form action="/DelFromCart" method="post">
                <input type="hidden" name="id" value="'.$item['id'].'">
                <input type="submit" value="Удалить из коризны"></li>
            </form>';
            }
            ?>
            </ol>
 </div>
