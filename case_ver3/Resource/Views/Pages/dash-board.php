<?php

session_start();

if (empty($_SESSION['userLogin'])) {
    header('Location: login.php');
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
    <link rel="stylesheet" href="../../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../../assets/css/base.css">
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/fonts/fontawesome-free-5.15.3/css/all.min.css">
</head>
<style>
    .btn-logout{
        text-decoration: none;
        color: var(--white-color);
    }
    .login-notify{
        margin: 10px 50% 0px 0;
        font-size: 16px;
        color: white;
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
                            <img src="../../../assets/image/qrcode.png" alt="QR Code" class="header__qr-img">
                            <div class="header__qr-apps">
                                <a href="" class="header__app-link">
                                    <img src="../../../assets/image/appstore.png" alt="APP store"
                                         class="header__qr-download">
                                </a>
                                <a href="" class="header__app-link">
                                    <img src="../../../assets/image/google-play.png" alt="Google play"
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
                <div class="login-notify">
                <span>
                    <?php
                    if (!empty($_SESSION['userLogin'])) {
                        echo "Hello" . $_SESSION['email'];
                    }
                    ?>
                </span>
                </div>
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
                    <li class="header__navbar-item header__navbar-item--strong"><a class="btn-logout" name="logOut" href="login.php">Logout</a></li>
                </ul>
            </nav>


            <!--        the tim kiem -->
            <div class="header-with-search">
                <div class="header__logo">
                    <img src="../../../assets/image/logo-ao-lop-01-removebg-preview.png" alt="Logo"
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
                            <img src="../../../assets/image/no-cart.png" alt="" class="header__cart-no-cart-img">
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
                        <img src="../../../assets/image/qrcode.png" alt="" class="footer__download-qr">
                        <div class="footer__download-apps">
                            <img src="../../../assets/image/google-play.png" alt="" class="footer__download-img">
                            <img src="../../../assets/image/appstore.png" alt="" class="footer__download-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__row">
                <img src="../../../assets/image/logo-ao-lop-01-removebg-preview.png" alt="" class="footer__icon">
                <div class="footer__text">
                    <p class="footer__text-content">Công ty TNHH Shop Smart.</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['logOut'])) {
            session_destroy();
            header('location: login.php');
        }
    }
?>
