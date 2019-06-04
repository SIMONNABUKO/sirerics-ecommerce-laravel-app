<div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="card" style="">
                    <div class="card-header">
                      Featured Categories
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($categories as $category)
                    <li class="list-group-item"> <span><img width ="50" height="50" src="{{asset('/storage/images/category_images/'.$category->category_image)}}" alt=""></span>
                        {{$category->category_name}}<div class="badge">{{$category->products->count()}}</div>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>     
                        @endforeach
                      
    
                    </ul>
                  </div>
            </div>
            <div class="col-lg-8">
                <!-- Slider -->
                <div id="main-slider" class="main-slider flexslider">
                    <ul class="slides">
                        <li>
                            <img src="/img/slides/flexslider/1.jpg" alt="" />
                            <div class="flex-caption">
                                <h3>Modern Design</h3>
                                <p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p>
                                <a href="#" class="btn btn-theme">Learn More</a>
                            </div>
                        </li>
                        <li>
                            <img src="/img/slides/flexslider/2.jpg" alt="" />
                            <div class="flex-caption">
                                <h3>Fully Responsive</h3>
                                <p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p>
                                <a href="#" class="btn btn-theme">Learn More</a>
                            </div>
                        </li>
                        <li>
                            <img src="/img/slides/flexslider/3.jpg" alt="" />
                            <div class="flex-caption">
                                <h3>Clean & Fast</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p>
                                <a href="#" class="btn btn-theme">Learn More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end slider -->
            </div>
            <div class="col-lg-2">

                    <div class="card" style="">
                            <div class="card-header">
                                    Latest Product
                                  </div>
                            @if($featured_product)
                    <img class="card-img-top" src="{{asset('storage/images/product_images/'.$featured_product->product_image)}}" alt="Card image cap">
                            <div class="card-body">
                                
                              <h5 class="card-title">{{$featured_product->product_name}}</h5>
                            <p class="card-text">{{$featured_product->product_description}}</p>
                            <div>  <p class="badge">KES {{$featured_product->product_price}}</p></div>
                              <a href="#" class="btn btn-primary">View Details</a>
                              @endif
                            </div>
                          </div>
                
                </div>
        </div>
    </div>


</section>