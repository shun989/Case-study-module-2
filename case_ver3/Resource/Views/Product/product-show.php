<div class="grid__column-2-4">
                                    san pham
    <a href="#" class="home-product-item">
        <div class="home-product-item__img">
            <img class="home-product-item__img"
                 src="https://bepduc.com.vn/media/image/2701/tu-lanh-side-by-side-bosch-kad92hi31-serie-8.jpg?size=600"
                 alt="">
        </div>
        <h4 class="home-product-item__name">Tủ lạnh side by side BOSCH KAD92HI31 Serie 8</h4>
        <div class="home-product-item__price">
            <span class="home-product-item__price-old">105.020.000 đ</span>
            <span class="home-product-item__price-current">105.020.000 đ</span>
        </div>
        <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                                                                        <i class="fas fa-heart"></i>
                                        </span>
            <div class="home-product-item__ratting">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="home-product-item__origin">
            <span class="home-product-item__brand">BOSCH</span>
            <span class="home-product-item__origin-name">Japan</span>
        </div>
        <div class="home-product-item__favourite">
            <i class="fas fa-check"></i>
            <span>Yêu thích</span>
        </div>
        <div class="home-product-item__sale-off">
            <span class="home-product-item__sale-off-percent">0%</span>
            <span class="home-product-item__sale-off-label">GIẢM</span>
        </div>
    </a>
</div>
<div class="grid__column-2-4">
<?php foreach ($products as $key => $product) : ?>

    <a href="#" class="home-product-item">
        <div class="home-product-item__img">
            <img class="home-product-item__img"
                 src="https://bepduc.com.vn/media/image/2701/tu-lanh-side-by-side-bosch-kad92hi31-serie-8.jpg?size=600"
                 alt="">
        </div>
        <h4 class="home-product-item__name"><?php echo $product['productName'] ?></h4>
        <div class="home-product-item__price">
            <span class="home-product-item__price-old"><?php echo $product['price'] ?></span>
            <span class="home-product-item__price-current">105.020.000 đ</span>
        </div>
        <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--<i class="fas fa-heart"></i>-->
                                        </span>
            <div class="home-product-item__ratting">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="home-product-item__origin">
            <span class="home-product-item__brand">BOSCH</span>
            <span class="home-product-item__origin-name">Japan</span>
        </div>
        <div class="home-product-item__favourite">
            <i class="fas fa-check"></i>
            <span>Yêu thích</span>
        </div>
        <div class="home-product-item__sale-off">
            <span class="home-product-item__sale-off-percent">0%</span>
            <span class="home-product-item__sale-off-label">GIẢM</span>
        </div>
    </a>

<?php endforeach; ?>
</div>

