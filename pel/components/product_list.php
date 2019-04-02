<a href="product.php?id=<?php echo $row["id"]; ?>" class="product-list-link">
    <div class="product-list">
        <img src="pel/img/<?php echo $row["img"]; ?>" class="product-list-img">
        <h4 class="product-list-name"><?php echo $row["name"]; ?></h4><br>
        <p class="product-list-desc"><?php echo $row["description"]; ?></p>
        <p class="product-list-price price"><?php echo $row["price"]*1.21 . " Kč"; ?></p>
    </div>
</a>
<!-- -->