<div>
    <h2><?php echo $row["name"]; ?></h2>
    <img src="pel/img/<?php echo $row["img"]; ?>" class="product-page-img">
    <p><?php echo $row["description"]; ?></p>
    <p class="price"><?php echo $row["price"] . " Kč bez DPH - " . $row["price"]*1.21 . " Kč s DPH"; ?></p>
    <button onclick="addToCart()">Přidat do košíku</button>
    <script src="pel/components/scripts.js"></script>
</div>
<!-- -->