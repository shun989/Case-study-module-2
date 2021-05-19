<?php

session_start();

if (empty($_SESSION['userLogin'])) {
    header('Location:Resource/Views/Pages/login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.3/css/all.min.css">
</head>
<style>
    .btn-auth__header {
        text-decoration: none;
        color: var(--white-color);
    }
</style>
<body>
<div class="app">
    <header class="header">
        <div class="grid">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--qr-hover header__navbar-item--separate">
                        Vào cửa hàng trên ứng dụng
                        <div class="header__qr">
                            <img src="./assets/image/qrcode.png" alt="QR Code" class="header__qr-img">
                            <div class="header__qr-apps">
                                <a href="" class="header__app-link">
                                    <img src="./assets/image/appstore.png" alt="APP store" class="header__qr-download">
                                </a>
                                <a href="" class="header__app-link">
                                    <img src="./assets/image/google-play.png" alt="Google play"
                                         class="header__qr-download">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="header__navbar-item">
                        <span class="header__navbar-tittle--no-click">Kết nối</span>
                        <a href="" class="header__navbar-icon-link">
                            <i class="header__navbar-icon fab fa-facebook-square"></i>
                        </a>
                        <a href="" class="header__navbar-icon-link">
                            <i class="header__navbar-icon fab fa-google-plus-square"></i>
                        </a>
                    </li>
                </ul>

                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--hover">
                        <a href="" class="header__navbar-item-link">
                            <i class="header__navbar-icon far fa-bell"></i>Thông báo</a>
                        <div class="header__notify">
                            <header class="header__notify-header">
                                <h3>Thông báo mới nhận</h3>
                            </header>
                            <ul class="header__notify-list">
                                <li class="header__notify-item header__notify-item--viewed">
                                    <a href="" class="header__notify-link">
                                        <img src="https://img.abaha.vn/photos/resized/1024x/83-1577355847-myphamohui-lgvina.png"
                                             alt="bo nuoc hoa" class="header__notify-img">
                                        <div class="header__notify-info">
                                            <span class="header__notify-name">nuoc hoa</span>
                                            <span class="header__notify-description">my pham ohui chinh hang</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="header__notify-item">
                                    <a href="" class="header__notify-link">
                                        <img src="https://img.abaha.vn/photos/resized/1024x/83-1577355847-myphamohui-lgvina.png"
                                             alt="bo nuoc hoa" class="header__notify-img">
                                        <div class="header__notify-info">
                                            <span class="header__notify-name">nuoc hoa</span>
                                            <span class="header__notify-description">my pham ohui chinh hang</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="header__notify-item">
                                    <a href="" class="header__notify-link">
                                        <img src="https://img.abaha.vn/photos/resized/1024x/83-1577355847-myphamohui-lgvina.png"
                                             alt="bo nuoc hoa" class="header__notify-img">
                                        <div class="header__notify-info">
                                            <span class="header__notify-name">nuoc hoa</span>
                                            <span class="header__notify-description">my pham ohui chinh hang</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <footer class="header__notify-footer">
                                <a href="" class="header__notify-footer--btn">Xem tat ca</a>
                            </footer>
                        </div>
                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">
                            <i class="header__navbar-icon far fa-question-circle"></i>Trợ giúp</a>
                    </li>
                    <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate"><a class="btn-auth__header"
                                href="Resource/Views/Pages/register.php">Đăng ký</a>
                    </li>
                    <li class="header__navbar-item header__navbar-item--strong"><a class="btn-auth__header" href="Resource/Views/Pages/login.php">Đăng nhập</a></li>
                </ul>
            </nav>

            <!--        the tim kiem -->
            <div class="header-with-search">
                <div class="header__logo">
                    <img src="./assets/image/logo-ao-lop-01-removebg-preview.png" alt="Logo"
                         class="header__logo-img">
                </div>
                <div class="header__search">
                    <div class="header__search-input-wrap">
                        <input type="text" class="header__search-input" maxlength="128"
                               placeholder="Tìm sản phẩm, thương hiệu, và tên shop">

                        <!--  search history-->
                        <div class="header__search-history">
                            <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                            <ul class="header__search-history-list">
                                <li class="header__search-history-item">
                                    <a href="">Kem duong da</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="">Nuoc hoa</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="">Son</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--                    <div class="header__search-select">-->
                    <!--                        <span class="header__search-select-label">Trong shop</span>-->
                    <!--                        <i class="header__search-select-icon fas fa-angle-down"></i>-->
                    <!---->
                    <!--                        <ul class="header__search-option">-->
                    <!--                            <li class="header__search-option-item header__search-option-item--active">-->
                    <!--                                <span>Trong shop</span>-->
                    <!--                                <i class="fas fa-check"></i>-->
                    <!--                            </li>-->
                    <!--                            <li class="header__search-option-item">-->
                    <!--                                <span>Ngoài shop</span>-->
                    <!--                                <i class="fas fa-check"></i>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <button class="header__search-btn">
                        <i class="header__search-btn-icon fas fa-search"></i>
                    </button>
                </div>
                <!--                gio hang-->
                <div class="header__cart">
                    <div class="header__cart-warp">
                        <i class="header__cart-icon fas fa-cart-plus"></i>
                        <div class="header__cart-list header__cart--no-cart">
                            <img src="./assets/image/no-cart.png" alt="" class="header__cart-no-cart-img">
                            <span class="header__cart-list-no-cart-msg">
                            Chưa có sản phẩm
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="app__container">
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column-2">
                    <nav class="category">
                        <h3 class="category__heading">
                            <i class="category__heading-icon far fa-list-alt"></i>Danh mục</h3>
                        <ul class="category-list">
                            <li class="category-item">
                                <a href="#" class="category-item__link">Điện Thoại</a>
                            </li>
                            <li class="category-item">
                                <a href="#" class="category-item__link">Máy tính</a>
                            </li>
                            <li class="category-item">
                                <a href="#" class="category-item__link">Điều hòa</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="grid__column-10">
                    <div class="home-product">
                        <div class="grid__row">
                            <div class="grid__column-2-4">
                                <!--                                san pham-->
                                <a href="#" class="home-product-item">
                                    <div class="home-product-item__img">
                                        <img class="home-product-item__img"
                                             src="data:image/jpeg;base64,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"
                                             alt="">
                                    </div>
                                    <h4 class="home-product-item__name">iPhone 12 Pro Max 512GB NEW</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">37.000.000-</span>
                                        <span class="home-product-item__price-current">38.900.000</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                        <span class="home-product-item__brand">Whoo</span>
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
                                <!--                                san pham-->
                                <a href="#" class="home-product-item">
                                    <div class="home-product-item__img">
                                        <img class="home-product-item__img"
                                             src="https://zshop.vn/images/thumbnails/350/196/detailed/112/Lenovo_ThinkPad_X1_Carbon_Gen_7_(1)_cbwm-x7.jpg?t=1600248524"
                                             alt="">
                                    </div>
                                    <h4 class="home-product-item__name">
                                        Lenovo ThinkPad X1 Carbon Gen 7 14 inch Core i7-10710U(6 core) 10th </h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">41,990,000 đ</span>
                                        <span class="home-product-item__price-current">41,990,000 đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                        <span class="home-product-item__brand">Lenovo</span>
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
                                <!--                                san pham-->
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
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                <!--                                san pham-->
                                <a href="#" class="home-product-item">
                                    <div class="home-product-item__img">
                                        <img class="home-product-item__img"
                                             src="https://dienmay247.com.vn/wp-content/uploads/2019/09/tu-lanh-samsung-inverter-617-lit-rs64r53012csv-mau-2019-10.jpg"
                                             alt="">
                                    </div>
                                    <h4 class="home-product-item__name">Tủ lạnh Samsung Inverter 617 lít RS64R53012C/SV Mẫu 2019</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">30,990,000₫</span>
                                        <span class="home-product-item__price-current">30,990,000₫</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                        <span class="home-product-item__brand">Whoo</span>
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
                                <!--                                san pham-->
                                <a href="#" class="home-product-item">
                                    <div class="home-product-item__img">
                                        <img class="home-product-item__img"
                                             src="https://img.abaha.vn/photos/resized/320x/83-1586781803-myphamohui-lgvina.png"
                                             alt="">
                                    </div>
                                    <h4 class="home-product-item__name">Set kem mắt tái sinh Ohui The First Geniture Eye
                                        Cream Edition Grand Blue</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">12.000.000đ</span>
                                        <span class="home-product-item__price-current">12.000.000đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                        <span class="home-product-item__brand">Whoo</span>
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
                                <!--                                san pham-->
                                <a href="#" class="home-product-item">
                                    <div class="home-product-item__img">
                                        <img class="home-product-item__img"
                                             src="https://img.abaha.vn/photos/resized/320x/83-1586781803-myphamohui-lgvina.png"
                                             alt="">
                                    </div>
                                    <h4 class="home-product-item__name">Set kem mắt tái sinh Ohui The First Geniture Eye
                                        Cream Edition Grand Blue</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">12.000.000đ</span>
                                        <span class="home-product-item__price-current">12.000.000đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                        <span class="home-product-item__brand">Whoo</span>
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
                                <!--                                san pham-->
                                <a href="#" class="home-product-item">
                                    <div class="home-product-item__img">
                                        <img class="home-product-item__img"
                                             src="https://img.abaha.vn/photos/resized/320x/83-1586781803-myphamohui-lgvina.png"
                                             alt="">
                                    </div>
                                    <h4 class="home-product-item__name">Set kem mắt tái sinh Ohui The First Geniture Eye
                                        Cream Edition Grand Blue</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">12.000.000đ</span>
                                        <span class="home-product-item__price-current">12.000.000đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                        <span class="home-product-item__brand">Whoo</span>
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
                                <!--                                san pham-->
                                <a href="#" class="home-product-item">
                                    <div class="home-product-item__img">
                                        <img class="home-product-item__img"
                                             src="https://img.abaha.vn/photos/resized/320x/83-1586781803-myphamohui-lgvina.png"
                                             alt="">
                                    </div>
                                    <h4 class="home-product-item__name">Set kem mắt tái sinh Ohui The First Geniture Eye
                                        Cream Edition Grand Blue</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">12.000.000đ</span>
                                        <span class="home-product-item__price-current">12.000.000đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                        <span class="home-product-item__brand">Whoo</span>
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
                                <!--                                san pham-->
                                <a href="#" class="home-product-item">
                                    <div class="home-product-item__img">
                                        <img class="home-product-item__img"
                                             src="https://img.abaha.vn/photos/resized/320x/83-1586781803-myphamohui-lgvina.png"
                                             alt="">
                                    </div>
                                    <h4 class="home-product-item__name">Set kem mắt tái sinh Ohui The First Geniture Eye
                                        Cream Edition Grand Blue</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">12.000.000đ</span>
                                        <span class="home-product-item__price-current">12.000.000đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                        <span class="home-product-item__brand">Whoo</span>
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
                                <!--                                san pham-->
                                <a href="#" class="home-product-item">
                                    <div class="home-product-item__img">
                                        <img class="home-product-item__img"
                                             src="https://img.abaha.vn/photos/resized/320x/83-1586781803-myphamohui-lgvina.png"
                                             alt="">
                                    </div>
                                    <h4 class="home-product-item__name">Set kem mắt tái sinh Ohui The First Geniture Eye
                                        Cream Edition Grand Blue</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">12.000.000đ</span>
                                        <span class="home-product-item__price-current">12.000.000đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like">
                                            <i class="far fa-heart"></i>
                                            <!--                                            <i class="fas fa-heart"></i>-->
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
                                        <span class="home-product-item__brand">Whoo</span>
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
                        </div>
                    </div>

                    <!--                    phan trang-->
                    <ul class="pagination home-product__pagination">
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">
                                <i class="pagination-item__icon fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="pagination-item__link">
                                <i class="pagination-item__icon fas fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="pagination-item pagination-item__active">
                            <a href="" class="pagination-item__link">1</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">2</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">3</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">4</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">5</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">...</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">15</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">
                                <i class="pagination-item__icon fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="pagination-item__link">
                                <i class="pagination-item__icon fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">Trung tâm trợ giúp</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">Hướng Dẫn Mua Hàng</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">Chính Sách Vận Chuyển</a>
                        </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Giới thiệu</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">Giới thiệu Shop Smart</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">Chính Sách Thanh Toán</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">Điều Khoản Chính Sách</a>
                        </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Về chúng tôi</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">Chính sách bảo mật</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">Quy chế hoạt động</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">Chính sách trả hàng và hoàn tiền</a>
                        </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Theo dõi</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">
                                <i class="footer-item__link-icon fab fa-facebook"></i>
                                Facebook</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">
                                <i class="footer-item__link-icon fab fa-tiktok"></i>
                                Tiktok</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item__link">
                                <i class="footer-item__link-icon fab fa-instagram-square"></i>
                                Instagram</a>
                        </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                    <div class="footer__download">
                        <img src="assets/image/qrcode.png" alt="" class="footer__download-qr">
                        <div class="footer__download-apps">
                            <img src="assets/image/google-play.png" alt="" class="footer__download-img">
                            <img src="assets/image/appstore.png" alt="" class="footer__download-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__row">
                <img src="assets/image/logo-ao-lop-01-removebg-preview.png" alt="" class="footer__icon">
                <div class="footer__text">
                    <p class="footer__text-content">Công ty TNHH Shop Smart.</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>

