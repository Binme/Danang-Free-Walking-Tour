@extends('layouts.master')
@section('content')
    <!-- Blog -->
    <div id="blog">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Main -->
                <main id="main" class="col-md-9 col-xs-12">
                    <div class="blog" style="display: block;"> 
                        <h4>{{$new_detail->title}}</h4>
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i>{{$new_detail->author}}</li>
                                <li><i class="fa fa-clock-o"></i>Thursday, December 14, 2017, 11:25 GMT+7</li>
                                <li><i class="fa fa-heart"></i>78</li>
                            </ul>
                        <div class="blog-img">
                            <img class="img-responsive" src="../assets/images/posts/images/{{$new_detail->img}}" alt="" style="width: 100%">
                        </div>
                        <div class="blog-content">
                             {!!$new_detail->body!!}     
                        </div>

                        <!-- blog tags -->
                        <div class="blog-tags">
                            <h5>Author :</h5>
                            <a href="#"><i class="fa fa-tag"></i>Tuoi Tre News</a>
                        </div>
                        <!-- blog tags -->
                    </div>
                </main>
                <!-- /Main -->

                <!-- Aside -->
                <aside id="aside" class="col-md-3">

                </aside>
                <!-- /Aside -->

            </div>
            <!-- /Row -->
        </div>  
        <div class="container"> 
            <div class="row">
                <div class="col-md-3">
                    <div class="widget-post">
                        <a href="{{url('/news/' .$new_detail_relative->id)}}">
                            <img src="../assets/images/posts/images/{{$new_detail_relative->img}}" alt="">{{$new_detail_relative->title}}
                        </a>
                        <ul class="blog-meta">
                            <li>Oct 18, 2017</li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="widget-post">
                        <a href="#">
                            <img src="assets/images/news2.jpg" alt="">Free walking tours open to visitors
                        </a>
                        <ul class="blog-meta">
                            <li>Oct 18, 2017</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-post">
                        <a href="#">
                            <img src="assets/images/news2.jpg" alt="">Free walking tours open to visitors
                        </a>
                        <ul class="blog-meta">
                            <li>Oct 18, 2017</li>
                        </ul>
                    </div>
                </div> -->
            </div>

        </div>
        <!-- /Container -->

    </div>
    <!-- /Blog -->
@endsection