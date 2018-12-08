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
            
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <div class="container-fluid content_full">
        <div class="row">
              <div class="col-md-2 sidebar pd0">
                <div class="side_user">
                    <h4>E-pharma</h4>
                </div>
                <ul>
                          <li><a href="{{ route('admin') }}"><i class="fa  fa-user-circle"></i>User Messages</a></li>
                          <li><a href="{{ route('product') }}"><i class="fa  fa-user-circle"></i>Medicine Information</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div><!--sidebar end-->
            <div class="col-md-10 admin-part pd0">
            	<ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="#">Dashboard</a></li>
                </ol>

                  <div class="card">
                    <div class="card-body">
                      <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Name</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Medicine Name" name="medicinename">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Company</label>
                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Company Name" name="medicinecompany">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Price </label>
                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Medicine Price" name="medicineprice">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Image</label>
                      <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="Medicine Image" name="image">
                    </div>
                  <input name="submit" type="submit" id="contact-submit" value="Submit" class="btn btn-primary">
                  </form>
               
                    </div>
                  </div>
                  
              
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
    <div class="container-fluid footer_full">
    	<div class="container footer">
        	<div class="row">
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    @include('admin.js-link')
  </body>
</html>