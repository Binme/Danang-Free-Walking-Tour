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
                            <img class="img-responsive" src="../assets/images/{{$new_detail->img_1}}" alt="" style="width: 100%">
                        </div>
                        <div class="blog-content">
                            <p><strong>{{$new_detail->strong_text_1}}</strong></p>

                            <p>{{$new_detail->text_1_1}}</p>              
                            <p>{{$new_detail->text_2_1}}</p>              
                            <p>{{$new_detail->text_3_1}}</p>              
                            <p>{{$new_detail->text_4_1}}</p>              
                            <p>{{$new_detail->text_5_1}}</p>              
                            <p>{{$new_detail->text_6_1}}</p>              
                            <p>{{$new_detail->text_7_1}}</p>              
                            <p>{{$new_detail->text_8_1}}</p>              
                            <p>{{$new_detail->text_9_1}}</p>              
                            <p>{{$new_detail->text_10_1}}</p>              
                            <p>{{$new_detail->text_11_1}}</p>              
                            <p>{{$new_detail->text_12_1}}</p>              
                            <p>{{$new_detail->text_13_1}}</p>              
                            <p>{{$new_detail->text_14_1}}</p>              
                            <p>{{$new_detail->text_15_1}}</p>              
                            <p>{{$new_detail->text_16_1}}</p>              
                            <p>{{$new_detail->text_17_1}}</p>              
                            <p>{{$new_detail->text_18_1}}</p>              
                            <p>{{$new_detail->text_19_1}}</p>              
                            <p>{{$new_detail->text_20_1}}</p>
                            <p><strong>{{$new_detail->strong_text_2}}</strong></p>

                            <p>{{$new_detail->text_1_2}}</p>              
                            <p>{{$new_detail->text_2_2}}</p>              
                            <p>{{$new_detail->text_3_2}}</p>              
                            <p>{{$new_detail->text_4_2}}</p>              
                            <p>{{$new_detail->text_5_2}}</p>              
                            <p>{{$new_detail->text_6_2}}</p>              
                            <p>{{$new_detail->text_7_2}}</p>              
                            <p>{{$new_detail->text_8_2}}</p>              
                            <p>{{$new_detail->text_9_2}}</p>              
                            <p>{{$new_detail->text_10_2}}</p>              
                            <p>{{$new_detail->text_11_2}}</p>              
                            <p>{{$new_detail->text_12_2}}</p>              
                            <p>{{$new_detail->text_13_2}}</p>              
                            <p>{{$new_detail->text_14_2}}</p>              
                            <p>{{$new_detail->text_15_2}}</p>              
                            <p>{{$new_detail->text_16_2}}</p>              
                            <p>{{$new_detail->text_17_2}}</p>              
                            <p>{{$new_detail->text_18_2}}</p>              
                            <p>{{$new_detail->text_19_2}}</p>              
                            <p>{{$new_detail->text_20_2}}</p>  
<!--                             <p><strong>{{$new_detail->strong_text_3}}</strong></p>

                            <p>{{$new_detail->text_1_3}}</p>              
                            <p>{{$new_detail->text_2_3}}</p>              
                            <p>{{$new_detail->text_3_3}}</p>              
                            <p>{{$new_detail->text_4_3}}</p>              
                            <p>{{$new_detail->text_5_3}}</p>              
                            <p>{{$new_detail->text_6_3}}</p>              
                            <p>{{$new_detail->text_7_3}}</p>              
                            <p>{{$new_detail->text_8_3}}</p>              
                            <p>{{$new_detail->text_9_3}}</p>              
                            <p>{{$new_detail->text_10_3}}</p>              
                            <p>{{$new_detail->text_11_3}}</p>              
                            <p>{{$new_detail->text_12_3}}</p>              
                            <p>{{$new_detail->text_13_3}}</p>              
                            <p>{{$new_detail->text_14_3}}</p>              
                            <p>{{$new_detail->text_15_3}}</p>              
                            <p>{{$new_detail->text_16_3}}</p>              
                            <p>{{$new_detail->text_17_3}}</p>              
                            <p>{{$new_detail->text_18_3}}</p>              
                            <p>{{$new_detail->text_19_3}}</p>              
                            <p>{{$new_detail->text_20_3}}</p>  
                            <p><strong>{{$new_detail->strong_text_4}}</strong></p>

                            <p>{{$new_detail->text_1_4}}</p>              
                            <p>{{$new_detail->text_2_4}}</p>              
                            <p>{{$new_detail->text_3_4}}</p>              
                            <p>{{$new_detail->text_4_4}}</p>              
                            <p>{{$new_detail->text_5_4}}</p>              
                            <p>{{$new_detail->text_6_4}}</p>              
                            <p>{{$new_detail->text_7_4}}</p>              
                            <p>{{$new_detail->text_8_4}}</p>              
                            <p>{{$new_detail->text_9_4}}</p>              
                            <p>{{$new_detail->text_10_4}}</p>              
                            <p>{{$new_detail->text_11_4}}</p>              
                            <p>{{$new_detail->text_12_4}}</p>              
                            <p>{{$new_detail->text_13_4}}</p>              
                            <p>{{$new_detail->text_14_4}}</p>              
                            <p>{{$new_detail->text_15_4}}</p>              
                            <p>{{$new_detail->text_16_4}}</p>              
                            <p>{{$new_detail->text_17_4}}</p>              
                            <p>{{$new_detail->text_18_4}}</p>              
                            <p>{{$new_detail->text_19_4}}</p>              
                            <p>{{$new_detail->text_20_4}}</p>   -->              
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
                            <img src="../assets/images/{{$new_detail_relative->img_1}}" alt="">{{$new_detail_relative->title}}
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