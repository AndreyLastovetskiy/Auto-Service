<?php

require_once("./db/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">
    
    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/input.css">
    <link rel="stylesheet" href="./style/media.css">

    <!-- OWL -->
    <link rel="stylesheet" href="./style/owl.carousel.min.css">
    <link rel="stylesheet" href="./style/owl.theme.default.min.css">

    <script src="./script/jquery.min.js"></script>
    <script src="./script/owl.carousel.min.js"></script>
    <title>Главная</title>
</head>
<body>
    <?php
    require_once("./modules/header.php");
    ?>
    <main>
        <div class="car">
            <div class="marka">
                <div class="marka-wrapper">
                    <a href="#!"><img src="./upload/BMW.png"></a>
                    <a href="#!"><img src="./upload/Volvo.png"></a>
                    <a href="#!"><img src="./upload/Suzuki.png"></a>
                    <a href="#!"><img src="./upload/Toyota.png"></a>
                    <a href="#!"><img src="./upload/Nissan.png"></a>
                    <a href="#!"><img src="./upload/Mercedes-Benz.png"></a>
                    <a href="#!"><img src="./upload/Subaru.png"></a>
                    <a href="#!"><img src="./upload/Mitsubishi.png"></a>
                </div>
            </div>
            <div class="slogan">
                <div class="slogan-wrapper">
                    <div class="sw-title">
                        <p>BEST SERVICES</p>
                    </div>
                    <div class="sw-subtitle">
                        <p>Most Popular Car Rental Deals</p>
                    </div>
                    <div class="sw-slog">
                        <p>Explore below our best car services experience like never before</p>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="item-wrapper">
                            <div class="iw-img">
                                <img src="./upload/Car Image.png">
                            </div>
                            <div class="iw-descr">
                                <p class="iwd-title">Toyota Corolla T-20</p>
                                <ul class="iw-ul">
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                </ul>
                                <a href="#!">Rent Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrapper">
                            <div class="iw-img">
                                <img src="./upload/Car Image.png">
                            </div>
                            <div class="iw-descr">
                                <p class="iwd-title">Toyota Corolla T-20</p>
                                <ul class="iw-ul">
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                </ul>
                                <a href="#!">Rent Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrapper">
                            <div class="iw-img">
                                <img src="./upload/Car Image.png">
                            </div>
                            <div class="iw-descr">
                                <p class="iwd-title">Toyota Corolla T-20</p>
                                <ul class="iw-ul">
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                </ul>
                                <a href="#!">Rent Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrapper">
                            <div class="iw-img">
                                <img src="./upload/Car Image.png">
                            </div>
                            <div class="iw-descr">
                                <p class="iwd-title">Toyota Corolla T-20</p>
                                <ul class="iw-ul">
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                </ul>
                                <a href="#!">Rent Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrapper">
                            <div class="iw-img">
                                <img src="./upload/Car Image.png">
                            </div>
                            <div class="iw-descr">
                                <p class="iwd-title">Toyota Corolla T-20</p>
                                <ul class="iw-ul">
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                </ul>
                                <a href="#!">Rent Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrapper">
                            <div class="iw-img">
                                <img src="./upload/Car Image.png">
                            </div>
                            <div class="iw-descr">
                                <p class="iwd-title">Toyota Corolla T-20</p>
                                <ul class="iw-ul">
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                </ul>
                                <a href="#!">Rent Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrapper">
                            <div class="iw-img">
                                <img src="./upload/Car Image.png">
                            </div>
                            <div class="iw-descr">
                                <p class="iwd-title">Toyota Corolla T-20</p>
                                <ul class="iw-ul">
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                </ul>
                                <a href="#!">Rent Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrapper">
                            <div class="iw-img">
                                <img src="./upload/Car Image.png">
                            </div>
                            <div class="iw-descr">
                                <p class="iwd-title">Toyota Corolla T-20</p>
                                <ul class="iw-ul">
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                    <li><span><img src="./upload/svg/check_circle_24px.svg"></span>Air Conditioned</li>
                                </ul>
                                <a href="#!">Rent Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose">
            <div class="choose-wrapper">
                <div class="cwl-head">
                    <div class="sw-title">
                        <p>BEST SERVICES</p>
                    </div>
                    <div class="sw-subtitle">
                        <p>Most Popular Car Rental Deals</p>
                    </div>
                    <div class="sw-slog">
                        <p>Explore below our best car services experience like never before</p>
                    </div>
                </div>
                <div class="cw-info">
                    <div class="cw-left">
                        <div class="cwl-img">
                            <img src="./upload/mazda.png">
                        </div>
                    </div>
                    <div class="cw-right">
                        <ul class="cwr-ul">
                            <li class="cwru-item">
                                <p>
                                    <span>24/7 Customer Support</span>
                                    <br>
                                    We keep our valued customers happy and provide 24/7 customer support
                                </p>
                            </li>
                            <li class="cwru-item">
                                <p>
                                    <span>24/7 Customer Support</span>
                                    <br>
                                    We keep our valued customers happy and provide 24/7 customer support
                                </p>
                            </li>
                            <li class="cwru-item">
                                <p>
                                    <span>24/7 Customer Support</span>
                                    <br>
                                    We keep our valued customers happy and provide 24/7 customer support
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once("./modules/footer.php");
    ?>

    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:26,
            responsive:{
                0:{
                    items:1
                },
                1100:{
                    items:3
                },
                1500:{
                    items:4
                },
            }
        })
    </script>
</body>
</html>