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

        <div class="container">
            <div class="row">
                <div class="col-md-12 about_content">
                    
                    @foreach($info as $infos)
                    <div class="col-md-6">
                    </div>
                        <h2>Medicine Name: {{ $infos->medicinename }}</h2>
                        <h4>Company Name: {{ $infos->medicinecompany }}</h4>
                        <h5>Medicine Price: {{ $infos->medicineprice }}</h5>
                        <img src="{!! asset('image/product/'.$infos->image) !!}" alt="{{ $infos->medicinename }}" style="height: 110px; width: 170px;">
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    


    <!-- about_part end -->



    @include('extra.footer') @include('extra.js-link')

</body>




</html>