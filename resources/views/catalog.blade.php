<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANANGFREEWALKINGTOUR</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catalog/common.catalog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catalog/desktop.catalog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catalog/mobile.catalog.css') }}">
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
            <img src="{{ asset('assets/images/logo-changed.png') }}" alt="">
        </div>
        <div class="things-catalog">
            <div class="things-but clicked">
                <a href="{{ url('/recoms/ajax/eat') }}" class="clicked">
                    <i class="flaticon-kitchen"></i>
                    <p>Eat</p>
                </a>
            </div>
            <div class="things-but">
                <a href="{{ url('/recoms/ajax/drink')}}">
                    <i class="flaticon-cocktail"></i>
                    <p>Drink</p>
                </a>
            </div>
            <div class="things-but">
                <a href="{{ url('/recoms/ajax/stay')}}">
                    <i class="flaticon-bed"></i>
                    <p>Stay</p>
                </a>
            </div>
            <div class="things-but">
                <a href="{{ url('/recoms/ajax/relax')}}">
                    <i class="flaticon-leaf"></i>
                    <p>Relax</p>
                </a>
            </div>
            <div class="things-but">
                <a href="{{ url('/recoms/ajax/entertainment')}}">
                    <i class="flaticon-joker"></i>
                    <p>Entertain</p>
                </a>
            </div>
            <div class="things-but">
                <a href="{{ url('/recoms/ajax/buy')}}">
                    <i class="flaticon-gift"></i>
                    <p>Gift</p>
                </a>
            </div>
        </div>
    </header>
    <!-- MAIN -->
    <main>
        <section class="list">
            @foreach($drinks as $drink)
            <a href="{{url('/recoms/' .$drink->id)}}">
                <div class="item">
                    <div class="img-item">
                        <img class="oblong-img" src="{{ asset('assets/images/ThingsToDo/' .$drink->img) }}" alt="">
                    </div>
                    <div class="text-item">
                        <div class="name-item">
                            {{$drink->title}}
                        </div>
                        <div class="detail-item">
                           {{$drink->address}}
                        </div>
                        <div class="cost-item">
                            <div class="space">|</div>
                            <div class="vn">

                                {{$drink->Recom_details->price}}
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            
        </section>
        <section class="contact">
            <div class="img-logo">
                <img src="images/logo-changed.png" alt="">
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
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/catalog.script.js') }}"></script>
</body>

</html>