<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>E Medicine</title>
    @include('extra.css-link')

</head>

<body>
   @include('extra.nav')



<!-- about_part start -->
<div class="container about_part">
    <div class="row">
        <!-- common_heading start -->
        <div class=" col-lg-12 common_heading">
            <h2>About Us</h2>
            <img src="image/heading-img.png" alt="heading-img">
        </div>
        <!-- common_heading start -->
    </div> 
    </div>
       <div class="container about_part">
        <div class="row">
               <div class=" about_img">
            <img src="image/about.jpg" alt="about.jpg">
        </div>
        <div class="about_content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiaeserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
        </div>
        </div>
</div>

<!-- about_part end -->

<!--Team part-->
<div class="container team_part">
   
        <!-- common_heading start -->
        <div class="common_heading">
            <h2>Our Team</h2>
            <img src="image/heading-img.png" alt="heading-img">
        </div>

        <!-- common_heading start -->
        <div class="row">
        <div class="team_main ">
            <div class="team_img">
                <img src="image/team1.jpg" alt="team1">
                <div class="overlay_team">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>    
                    </ul>
                </div>
            </div>
            <h4>Sagor Banik</h4>
             <p>Daffodil international University</p>
           
           
        </div>
        <div class="team_main ">
            <div class="team_img">
                <img src="image/team2.jpg" alt="team1">
                <div class="overlay_team">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>    
                    </ul>
                </div>
            </div>
            <h4>Rakiba Sultana</h4>
            <p>Daffodil international University</p>
           
        </div>
        <div class=" team_main ">
            <div class="team_img">
                <img src="image/team3.jpg" alt="team1">
                <div class="overlay_team">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>    
                    </ul>
                </div>
            </div>
            <h4>Koushik kabir</h4>
         <p>Daffodil international University</p>
           
           
        </div>
    </div>  
    </div>
   

<!-- team_part end -->


<!--Team part end-->

@include('extra.footer')

@include('extra.js-link')

</body>




</html>