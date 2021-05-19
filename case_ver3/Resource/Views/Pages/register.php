<?php
require_once "../../../vendor/autoload.php";

use App\Controller\RegisterController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $registerController = new RegisterController();
    $registerController->register($_REQUEST);
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
    .lick-back {
        text-decoration: none;
        color: var(--text-color);
    }
    .btn-auth{
        text-decoration: none;
        color: var(--primary-color);
    }
</style>
<body>
<div class="modal">
    <div class="modal__overlay"></div>
    <div class="modal__body">
        <!--     dang ky-->
        <div class="auth-form">
            <form action="" method="post">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn"><a class="btn-auth" href="login.php">Đăng nhập</a></span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" name="email" pattern="^[a-z]\w[^A-Z]?=\@{50}$" title=" Sai ngữ pháp !" class="auth-form__input" placeholder="Email/User của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" name="password" pattern="\w{6,20}$" title="Mật khẩu tối thiểu 6 ký tự." class="auth-form__input"
                                   placeholder="Mật khẩu của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                            <a href="" class="auth-form__text-link">Điều khoản dich vụ</a> &
                            <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth-form__controls">
                        <button class="btn auth-form__controls-back btn--normal"><a class="lick-back"
                                                                                    href="../../../index.php">TRỞ
                                LẠI</a></button>
                        <button type="submit" class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials-fb btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                                        Kết nối với Facebook
                                </span>

                    </a>
                    <a href="" class="auth-form__socials-gg btn btn--size-s  btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-google"></i>
                        <span class="auth-form__socials-title">
                                    Kết nối với Google
                                </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

