@extends('layouts.test')
@section('content')
	<!-- Blog -->
	<div id="blog">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-9 col-xs-12">
                    <div class="blog" style="display: inline-block;padding:0;background-color: #f1f1f1;border: none;">
                        <div class="container-video">
                          <div class="mySlides">
                            <img src="../assets/images/ThingsToDo/{{$recom_detail->img_1}}">
                          </div>

                          <div class="mySlides">
                            <img src="../assets/images/ThingsToDo/{{$recom_detail->img_2}}">
                          </div>

                          <div class="mySlides">
                            <img src="../assets/images/ThingsToDo/{{$recom_detail->img_3}}">
                          </div>
                            
                          <div class="mySlides">
                            <img src="../assets/images/ThingsToDo/{{$recom_detail->img_4}}">
                          </div>

                          <div class="mySlides">
                            <img src="../assets/images/ThingsToDo/{{$recom_detail->img_5}}">
                          </div>
                            
                          <a class="prev" onclick="plusSlides(-1)">❮</a>
                          <a class="next" onclick="plusSlides(1)">❯</a>

                          <div class="row" style="width: 100%;margin:auto;">
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/ThingsToDo/{{$recom_detail->img_1}}" style="width:100%" onclick="currentSlide(1)" alt="Da Nang - Viet Nam">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/ThingsToDo/{{$recom_detail->img_2}}" style="width:100%" onclick="currentSlide(2)" alt="Da Nang - Viet Nam">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/ThingsToDo/{{$recom_detail->img_3}}" style="width:100%" onclick="currentSlide(3)" alt="Da Nang - Viet Nam">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/ThingsToDo/{{$recom_detail->img_4}}" style="width:100%" onclick="currentSlide(4)" alt="Da Nang - Viet Nam">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/ThingsToDo/{{$recom_detail->img_5}}" style="width:100%" onclick="currentSlide(5)" alt="Da Nang - Viet Nam">
                            </div>
                          </div>
                        </div>
					          </div>
					
                    <div class="icon-bar" style="margin-bottom: 15px;">
                      <a onclick="filterSelection('intro')"><i class="fa fa-address-book"></i><h6>Info</h6></a>  
                      <a onclick="filterSelection('comment')"><i class="fa fa-comment"></i><h6>Com</h6></a> 
                      <a onclick="filterSelection('map')"><i class="fa fa-map-marker"></i><h6>Map</h6></a>
                      <a onclick="filterSelection('linkthing')"><i class="fa fa-tag"></i><h6>Links</h6></a> 
                    </div>
          <!-- Portfolio Gallery Grid -->
                    <div class="row-recom">
                   <div class="blog intro">
                        <h4>{{$recom_detail->title}}</h4>
                        <div class="blog-content">
                            <p><strong>Category: {{$recom_detail->category}}</strong></p>

                            <p><i class="fa fa-arrow-circle-right" style="color: #F5bC25;margin-right: 5px;font-size: 20px;width: 20px;height: 20px"></i>About:<br>{{$recom_detail->about}}</p>
                            <p><i class="fa fa-map-marker" style="color: #F5bC25;margin-right: 5px;font-size: 20px;width: 20px;height: 20px"></i>Address: {{$recom_detail->address}}</p>
                            <p><i class="fa fa-clock-o" style="color: #F5bC25;margin-right: 5px;font-size: 20px;width: 20px;height: 20px"></i>{{$recom_detail->hour}}</p>
                            <p><i class="fa fa-tag" style="color: #F5bC25;margin-right: 5px;font-size: 20px;width: 20px;height: 20px"></i>{{$recom_detail->price}}</p>
                            <p><strong>Rating:</strong>
                                {{$recom_detail->rating}}
                            </p>
                        </div>
                    </div>
                    <!-- <div class="blog comment">
                        <ul class="blog-meta">
                            <li><i class="fa fa-user"></i>Nguyen Van Loi</li>
                            <li><i class="fa fa-clock-o"></i>Thursday, December 14, 2017, 11:25 GMT+7</li>
                            <li><i class="fa fa-heart"></i>78</li>
                        </ul>
                        <div class="blog-content">
                            <p><strong>Mì Quảng Ếch Bếp Trang - Hà Bổng</strong></p>
                            <p>Tới Đà Nẵng là nhà mình đi ăn mỳ quảng luôn. Quán nằm gần khách sạn nên đi bộ xíu là tới.</p>
                            <p>Đồ ăn được để trên cái mâm tròn nhìn đẹp lắm. Nước dùng với đồ ăn để riêng trong cái hũ nhỏ. Mỳ với rau thì để ở ngoài. Mỳ quảng ngon xuất sắc luôn, nhất là nước dùng. Nhà mình ăn ai cũng khen. Ớt sa tế lúc ăn có chút ngọt ngọt ngon lắm luôn. Chả bò cũng ngon nốt, ăn mấy chỗ rồi nhưng chưa có chỗ nào ngon bằng chỗ này.</p>
                            <img src="../assets/images/ThingsToDo/foody-mobile-tr2-jpg.jpg">
                        </div>
                        </div>    
                    </div> -->
                    <div class="blog map">
                        <div class="blog-content">
                            <iframe src="https://www.google.com/maps/embed?{{$recom_detail->map}}" width="1000" height="600" frameborder="0" style="border:0; width: 100%;height: 220px" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog linkthing">
                    @foreach ($recom_detail_relatives as $recom_detail_relative)    
                        <div class="responsive responsive-left">
                          <div class="content">
                            <img src="../assets/images/ThingsToDo/{{$recom_detail_relative->img_1}}" alt="Mountains" style="width:100%">
                            <h6>{{$recom_detail_relative->title}}</h6>
                            <p>{{$recom_detail_relative->address}}</p>
                            {{$recom_detail_relative->rating}}
                            <a href="{{url('/recoms/' .$recom_detail_relative->recom_id)}}"><i class="fa fa-arrow-right">See more</i></a>
                          </div>
                        </div>
                    @endforeach 
                        <div class="clearfix-thingToDo"></div>
                    </div> 
				</main>
				<!-- /Main -->


				<!-- Aside -->
				<aside id="aside" class="col-md-3">
					<!-- <img src="../assets/images/ThingsToDo/f4ccdd746f56c4bc1217c109a73db156.jpg" style="width: 100%;height:100%;margin-top: 15px"> -->
				</aside>
				<!-- /Aside -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->
@endsection