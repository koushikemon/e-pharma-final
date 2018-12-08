<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    @include('admin.css-link')
</head>

<body>
    <div class="container-fluid header_full">
        <div class="container header">
            <div class="row">

            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </div>
    <!--container-fluid end-->
    <div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar pd0">
                <div class="side_user">
                    <h4>E-pharma</h4>
                </div>
                <ul>
                    <li><a href="{{ route('admin') }}"><i class="fa  fa-user-circle"></i>User Messages </a></li>
                    <li><a href="{{ route('product') }}"><i class="fa  fa-user-circle"></i>Medicine Information</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div>
            <!--sidebar end-->
            <div class="col-md-10 admin-part pd0">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#">/Dashboard</a></li>
                </ol>
                <div class="col-md-12">


                    <h3 style="text-align:center; padding-bottom:60px;">Contact Information</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Number</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $datas)
                            <tr>
                                <td>{{ $datas->name }}</td>
                                <td>{{ $datas->email }}</td>
                                <td>{{ $datas->number }}</td>
                                <td>{{ $datas->message }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--col-md-12 end-->
            </div>
            <!--admin-part end-->
        </div>
        <!--row end-->
    </div>
    <!--container-fluid end-->
    <div class="container-fluid footer_full">
        <div class="container footer">
            <div class="row">
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </div>
    <!--container-fluid end-->
    @include('admin.js-link')
</body>

</html>