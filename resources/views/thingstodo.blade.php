<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANANGFREEWALKINGTOUR</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="icon/flaticon.css">
    <link rel="stylesheet" href="css/things/common.things.css">
    <link rel="stylesheet" href="css/things/desktop.things.css">
    <link rel="stylesheet" href="css/things/mobile.things.css">
</head>

<body>
    <!-- Chat with us -->
    <div class="chat wow bounceInLeft" data-wow-duration="2s">
        <a href="">
            <i class="fab fa-facebook-messenger"></i>
        </a>
        <div></div>
    </div>
    <!-- header -->
    <header>
        <div class="toggle">
                <i class="fas fa-bars"></i>
        </div>
        <div class="head-img">
            <img src="assets/images/logo-changed.png" alt="">
        </div>
        <div class="things-catalog">
            <div class="things-but">
                <a href="">
                    <i class="flaticon-kitchen"></i>
                    <p>Eat</p>
                </a>
            </div>
            <div class="things-but">
                <a href="">
                    <i class="flaticon-cocktail"></i>
                    <p>Drink</p>
                </a>
            </div>
            <div class="things-but">
                <a href="">
                    <i class="flaticon-bed"></i>
                    <p>Stay</p>
                </a>
            </div>
            <div class="things-but">
                <a href="">
                    <i class="flaticon-leaf"></i>
                    <p>Relax</p>
                </a>
            </div>
            <div class="things-but">
                <a href="">
                    <i class="flaticon-joker"></i>
                    <p>Entertain</p>
                </a>
            </div>
            <div class="things-but">
                <a href="">
                    <i class="flaticon-gift"></i>
                    <p>Gift</p>
                </a>
            </div>
        </div>
        <div class="things-cart">
            <a href="">
                <div class="cart-bor">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </a>
        </div>
    </header>
    <!-- MAIN -->
    <main>
        <section class="cover">
            <img src="assets/images/ThingsToDo/{{$image[0]->img}}" alt="">
        </section>
        <section class="info">
            <div class="info-avt">
                <div class="avt">
                    <img class="square-img" class="avt-img" src="assets/images/ThingsToDo/{{$image[1]->img}}" alt="">
                </div>
                <div class="info-rated">
                    <div class="rated-num">
                        87.77%
                    </div>
                    <div class="rated-text">
                        Good Reviews
                    </div>
                </div>
            </div>
            <div class="info-text">
                <div class="name-text">
                    BBQ ỦN ỈN
                </div>
                <div class="info-item">
                    <i class="fas fa-arrow-circle-right"></i>
                    <p>Hip BBQ restaurant in Nha Trang and Da Nang,built from used shipping containers. Offers succulent smoked
                        pork ribs amongst a range of other tasty options! </p>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Address: 379 Tran Hung Dao Street, Son Tra District, Da Nang</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <p>7:00 AM - 8:00PM</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-tag"></i>
                    <p>$1.7 - $3.44 | 39.000đ - 79.000đ</p>
                </div>
            </div>
        </section>
        <section class="menu">
            <div class="menu-title">
                MENU
            </div>
            <div class="menu-recommend">
                <div class="recmm-img">
                    <img class="img-recmm" src="assets/images/ThingsToDo/{{$image[2]->img}}" alt="">
                </div>
                <div class="recmm-text">
                    <div class="name-recmm">
                        Bánh tráng cuốn thịt heo
                    </div>
                    <div class="detail-recmm">
                        To make the exact kind of roll, the pork chosen must have a balance between meat and fat. It is then boiled until it reaches
                        a certain degree of softness. Boiled pork is sliced and placed onto the plate.
                    </div>
                    <div class="cost-recmm">
                        $15.00
                    </div>
                    <div class="but-recmm">
                        <a href="">
                            <div class="but-here">
                                Deliver Now
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-list">
                @for ($i = 1;$i < 7;$i++)
                <div class="list-col">
                    <div class="list-item">
                        <div class="show-item">
                            <div class="img-item">
                                <img class="oblong-img" src="assets/images/ThingsToDo/{{$image[3]->img}}" alt="">
                                <div class="hide-item">
                                    <div class="description-item">
                                        The soft rice cover, the sophisticated fillings, and the tasty sauce.
                                    </div>
                                    <div class="but-item">
                                        <a href="">
                                            <div class="but-here">
                                                Deliver Now
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="title-item">
                                <div class="name-item">
                                    Bánh tráng cuốn thịt heo
                                </div>
                                <div class="cost-item">
                                    $15.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="show-item">
                            <div class="img-item">
                                <img class="oblong-img" src="assets/images/ThingsToDo/{{$image[4]->img}}" alt="">
                                <div class="hide-item">
                                    <div class="description-item">
                                        The soft rice cover, the sophisticated fillings, and the tasty sauce.
                                    </div>
                                    <div class="but-item">
                                        <a href="">
                                            <div class="but-here">
                                                Deliver Now
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="title-item">
                                <div class="name-item">
                                    Bánh tráng cuốn thịt heo
                                </div>
                                <div class="cost-item">
                                    $15.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
                </div>
            </div>
        </section>
        <section class="cmt">
            <div class="cmt-title">COMMENTS</div>
            <div class="cmt-wrap">
                <div class="cmt-list">
                    <div class="rated-item">
                        <div class="rated-num">
                            5
                        </div>
                        <div class="rated-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="rated-percent">
                            <div class="total">
                                <div class="percent"></div>
                            </div>
                        </div>
                    </div>
                    <div class="rated-item">
                        <div class="rated-num">
                            4
                        </div>
                        <div class="rated-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="rated-percent">
                            <div class="total">
                                <div class="percent"></div>
                            </div>
                        </div>
                    </div>
                    <div class="rated-item">
                        <div class="rated-num">
                            3
                        </div>
                        <div class="rated-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="rated-percent">
                            <div class="total">
                                <div class="percent"></div>
                            </div>
                        </div>
                    </div>
                    <div class="rated-item">
                        <div class="rated-num">
                            2
                        </div>
                        <div class="rated-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="rated-percent">
                            <div class="total">
                                <div class="percent"></div>
                            </div>
                        </div>
                    </div>
                    <div class="rated-item">
                        <div class="rated-num">
                            1
                        </div>
                        <div class="rated-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="rated-percent">
                            <div class="total">
                                <div class="percent"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-cmt">
                    <div class="add-but">
                        <p>Write A Review</p>
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                </div>
            </div>
            <div class="old-cmt">
                <div class="old-cmt-wrap">
                    <div class="user">
                        <div class="avt">
                            <img src="assets/images/ThingsToDo/Mask Group.png" alt="">
                        </div>
                        <div class="name">
                            Thomas Andrew
                        </div>
                        <div class="date">
                            15/6/2018 16:56
                        </div>
                    </div>
                    <div class="text">
                        <div class="rated">
                            <div class="rated-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="rated-text">
                                Extremely tasty
                            </div>
                        </div>
                        <div class="text-cmt">
                            I have been here so many times and I will keep coming back. Simply because the food is always as good as the first time I
                            was there. My favourite is banh uot, the meat was beautifully marinated before bbqing, the fishsauce
                            was light and perfect for the dish.
                        </div>
                        <div class="img-cmt">
                            <div class="img-item">
                                <img class="oblong-img" src="assets/images/ThingsToDo/things-img.png" alt="">
                            </div>
                            <div class="img-item">
                                <img class="oblong-img" src="assets/images/ThingsToDo/things-img 2.png" alt="">
                            </div>
                            <div class="img-item">
                                <img class="oblong-img" src="assets/images/ThingsToDo/things-img 2.png" alt="">
                            </div>
                            <div class="img-item">
                                <img class="oblong-img" src="assets/images/ThingsToDo/things-img 2.png" alt="">
                            </div>
                            <div class="img-item">
                                <img class="oblong-img" src="assets/images/ThingsToDo/things-img 2.png" alt="">
                            </div>
                        </div>
                        <div class="interact">
                            <div class="item">
                                <i class="fas fa-heart"></i>
                                <p>Like</p>
                            </div>
                            <div class="item">
                                <i class="fas fa-comment"></i>
                                <p>Comment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="old-cmt-wrap">
                    <div class="user">
                        <div class="avt">
                            <img src="assets/images/ThingsToDo/Mask Group (1).png" alt="">
                        </div>
                        <div class="name">
                            Lily Ju
                        </div>
                        <div class="date">
                            15/6/2018 16:56
                        </div>
                    </div>
                    <div class="text">
                        <div class="rated">
                            <div class="rated-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="rated-text">
                                Extremely tasty
                            </div>
                        </div>
                        <div class="text-cmt">
                            If you visit Da Nang, don't miss this place, haha. I love this restaurant, the price is not really expensive. I think the
                            price is kinda cheap to me. and food is extremely tasty!!! Yummy
                        </div>
                        <div class="interact">
                            <div class="item">
                                <i class="fas fa-heart"></i>
                                <p>Like</p>
                            </div>
                            <div class="item">
                                <i class="fas fa-comment"></i>
                                <p>Comment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="maps">
            <div class="maps-title">MAPS</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6086.0604970838485!2d108.2285296072221!3d16.06668219889813!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x650f1ff41099c1f5!2zQkJRIOG7pm4g4buIbg!5e0!3m2!1svi!2sus!4v1531661092490"
                width="" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
        <section class="likes">
            <div class="likes-title">
                YOU MAY ALSO LIKE
            </div>
            <div class="likes-list">
                @foreach ($recom_relatives as $recom_relative)
                <div class="like-item">
                    <div class="img-item">
                        <img src="assets/images/ThingsToDo/{{$recom_relative->img}}" class="oblong-img" alt="">
                        <div class="pop-up">
                            <a href="">
                                <div class="click-here">
                                    {{$recom_relative->title}}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section class="contact">
            <div class="img-logo">
                <img src="assets/images/logo-changed.png" alt="">
            </div>
            <div class="contact-list">
                <div class="contact-icon">
                    <a href="mailto:danangfreewalkingtour@gmail.com">
                        <i class="fas fa-envelope-open"></i>
                        <p>danangfreewalkingtour@gmail.com</p>
                    </a>
                </div>
                <div class="contact-icon">
                    <a href="">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>108 Bach Dang Street, Da Nang, Viet Nam</p>
                    </a>
                </div>
                <div class="contact-icon">
                    <a href="">
                        <i class="far fa-clock"></i>
                        </i>
                        <p>9am to 11am / 3pm to 5pm / 5pm to 7pm</p>
                    </a>
                </div>
                <div class="contact-icon">
                    <a href="">
                        <i class="fas fa-phone" data-fa-transform="rotate-90"></i>
                        <p>+84 90 563 14 19</p>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!-- FOOTER -->
    <footer>
        &copy; 2018 Da Nang Free Walking Tour
    </footer>
    <!-- Script Here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/things.script.js"></script>
</body>

</html>