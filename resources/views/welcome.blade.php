<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>E Medicine</title>
    @include('extra.css-link')

</head>

<body>
   @include('extra.nav')

    <!--  slider part strat -->

    <section id="banner_part">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/banner2.jpg" alt="First slide">
                    <div class="overlay_banner">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 banner_content text-center">
                                        <h1>wELCOME on <span>E PHARMACY</span></h1>
                                        <p>We are a digital agency with <span>years of experience</span> and with <span>extraordinary</span> people</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/banner2.jpg" alt="First slide">
                    <div class="overlay_banner">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 banner_content">
                                        <h1>wELCOME on <span>E PHARMACY</span></h1>
                                        <p>We are a digital agency with years of experience and with extraordinary people</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/banner2.jpg" alt="First slide">
                    <div class="overlay_banner">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 banner_content">
                                        <h1>wELCOME on <span>E PHARMACY</span></h1>
                                        <p>We are a digital agency with years of experience and with extraordinary people</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev btn_cont" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon btn_con" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
            <span class="sr-only">Previous</span>
          </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon btn_con" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>


    <!--  slider part end -->

    <!--Content part start-->
    <div class="container">
        <div class="row ">
           
            <div class="col-lg-4 content " id="content1">
                <i class="fas fa-headphones"></i>
                <h4>PREMIUM SUPPORT</h4>
                <P>Duis autem vel eum iriure dolor hendrerit vulputate velit esse molestie consequat, vel illum dolore feugiat nulla.</P>
            </div>
            <div class="col-lg-4 content " id="content2">
                <i class="fas fa-headphones"></i>
                <h4>PREMIUM SUPPORT</h4>
                <P>Duis autem vel eum iriure dolor hendrerit vulputate velit esse molestie consequat, vel illum dolore feugiat nulla.</P>

            </div>
            <div class="col-lg-4 content  " id="content3">
                <i class="fas fa-headphones"></i>
                <h4>PREMIUM SUPPORT</h4>
                <P>Duis autem vel eum iriure dolor hendrerit vulputate velit esse molestie consequat, vel illum dolore feugiat nulla.</P>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>POPULAR IN STORE</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <button type="button" class="btn "><a href="#primary1">Primary</a></button>
                <button type="button" class="btn"><a href="#baby01">Baby</a></button>
                <button type="button" class="btn">Vitamins</button>
                <button type="button" class="btn">Fitness</button>
                <button type="button" class="btn"> Care</button>
            </div>
        </div>
    </div>

    <!--Content part end-->


    <!--Medicine content part start -->
    <div id="primry1">
       <div class="container con ">
           <div class="row ">
            @foreach($product as $data)
              <div class="col-lg-3">
                    <div class="gly_main">
                        <div class="gly_small mar_b_20">
                            Product Name :{{ $data->medicinename }} <br>
                            Product Price :{{ $data->medicineprice }}
                            <img src="{!! asset('image/product/'.$data->image) !!}" alt="{{ $data->medicinename }}">
                            <div class="gly_overlay">
                               <button><a href="#"> <i class="fas fa-cart-plus"></i></a></button> 
                            </div>
                        </div>
                    </div>
              </div>
              @endforeach

           </div>
    </div>
</div>
    

    
    <!--Medicine content part end-->

 





@include('extra.footer')

@include('extra.js-link')

</body>




</html>