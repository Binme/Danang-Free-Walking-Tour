<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANANGFREEWALKINGTOUR</title>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/post/common.post.css') }}">
    <link rel="stylesheet" href="{{ asset('css/post/desktop.post.css') }}">
    <link rel="stylesheet" href="{{ asset('css/post/mobile.post.css') }}">
</head>

<body>
    <!-- Chat with us -->
    <div class="chat wow bounceInLeft" data-wow-duration="2s">
        <a href="">
            <i class="fab fa-facebook-messenger"></i>
        </a>
        <div></div>
    </div>
    <!-- BANNER -->
    <header class="banner">
        <div class="desktop-banner">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7rOXw8bf2o3eEmZDAdsreEgfvpUTGzeu1CDVgC7ufgInIgw/viewform">
                <img src="{{ asset('assets/images/FoodyGIF.gif') }}" alt="">
            </a>
        </div>
        <div class="mobile-banner">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7rOXw8bf2o3eEmZDAdsreEgfvpUTGzeu1CDVgC7ufgInIgw/viewform">
                <img src="{{ asset('assets/images/FoodyGIFMobile.gif') }}" alt="">
            </a>
        </div>
    </header>
    <!-- Header -->
    <header>
        <div class="head-contact">
            <div class="head-info">
                <div class="local">
                    <a href="">
                        <i class="fas fa-map-marker-alt" data-fa-transform="down-4"></i>
                        <p>108 Bach Dang Street, Da Nang, Viet Nam</p>
                    </a>
                </div>
                <div class="head-time_open">
                    <a href="">
                        <i class="far fa-clock" data-fa-transform="down-4"></i>
                        </i>
                        <p>Everyday: 9am to 11am / 3pm to 5pm / 5pm to 7pm</p>
                    </a>
                </div>
                <div class="head-phone_number">
                    <a href="">
                        <i class="fas fa-phone" data-fa-transform="rotate-90 down-4"></i>
                        <p>+84 90 563 14 19</p>
                    </a>
                </div>
            </div>
            <div class="head-link_contact">
                <a href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="">
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <a href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
        <div class="head-menu">
            <div class="header-image">
                <a href="">
                    <img src="{{ asset('assets/images/logo.jpg') }}" alt="">
                </a>
            </div>
            <div class="menu-list">
                <div class="home_but">
                    <a href="#">HOME</a>
                </div>
                <div class="route">
                    <a href="#route">ROUTE</a>
                </div>
                <div class="tours">
                    <a href="#tours">TOURS</a>
                </div>
                <div class="about">
                    <a href="#about">ABOUT</a>
                </div>
                <div class="galleries">
                    <a href="#galleries">GALLERIES</a>
                </div>
                <div class="packages">
                    <a href="#packages">PACKAGES</a>
                </div>
                <div class="DNnow">
                    <a href="#DNnow">DA NANG NOW</a>
                </div>
            </div>
        </div>
    </header>
    <!-- MAIN -->
    <main>
        <section class="news">
            <div class="news-content">
                <div class="news-title">STUDENTS OFFER FREE WALKING TOURS TO FOREIGN TOURISTS IN DA NANG</div>
                <div class="news-icon">
                    <div class="icon-detail">
                        <i class="fas fa-user"></i>
                        <div>Tuoi Tre News</div>
                    </div>
                    <div class="icon-detail">
                        <i class="far fa-clock"></i>
                        <div>Thursday, December 14, 2017, 11:25 GMT+7</div>
                    </div>
                    <div class="icon-detail">
                        <i class="fas fa-heart"></i>
                        <div>78</div>
                    </div>
                </div>
                <div class="news-img">
                    <img src="../assets/images/posts/images/{{$new_detail->img}}" alt="">
                </div>
                <div class="news-detail">{{$new_detail->title}}</div>
                <div class="news-text">
                    {!!$new_detail->body!!}
                </div>
                <div class="news-author">
                    <div>AUTHOR: </div>
                    <a href="">
                        <div class="name">
                            <i class="fas fa-tag"></i>
                            Tuoi Tre News
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="other-news">
        @foreach ($new_detail_relatives as $new_detail_relative)    
            <a href="{{url('/news/' .$new_detail_relative->id)}}">
                <div class="img">
                    <img src="../assets/images/posts/images/{{$new_detail_relative->img}}" alt="">
                </div>
                <div class="title">
                    {{$new_detail_relative->title}}
                </div>
                <div class="time">
                    
                </div>
            </a>
        @endforeach    
        </section>
        <section class="map-here">
            <div class="quick-link">
                <div class="quick-title">QUICK LINK</div>
                <div class="quick-list">
                    <a href="#route">
                        <i class="fas fa-chevron-right"></i>ROUTE</a>
                    <a href="#tours">
                        <i class="fas fa-chevron-right"></i>TOURS</a>
                    <a href=".about">
                        <i class="fas fa-chevron-right"></i>ABOUT US</a>
                    <a href="#galleries">
                        <i class="fas fa-chevron-right"></i>GALLERIES</a>
                    <a href="#latest-news">
                        <i class="fas fa-chevron-right"></i>LATEST NEWS</a>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d122686.14540756414!2d108.224787!3d16.068497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x721851f4e408aa9!2sDa+Nang+Free+Walking+Tour!5e0!3m2!1svi!2sus!4v1529044411741"
                    width="" height="" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="facebook">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdanangfreewalkingtour%2F&tabs=timeline&width=340&height=221px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="" height="" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"
                    allow="encrypted-media"></iframe>
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
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/post.script.js') }}"></script>
</body>

</html>