<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

<style>


.bg{
    background-color: #a4afbf;
    height: 950px;
    position: relative;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}


</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add Company</title>
  </head>
  <body >
<div class="bg">







  <br>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-6">

        @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif


            <div class="card" style="background-color:#171c24;color: white; box-shadow: 0 4px 8px 0; rgba(0, 0, 0, 1);  max-width: 95%;  margin: auto;  text-align: center;  font-family: arial;">
              <img src="/image/logo.png" alt="logo"width="100%" height="140">
                <div class="card-header">
                    <h4>Add Company</h4>
                </div>
                <div class="card-body">

                    <form action="{{url('create_company')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group mb-3">
                            <label for="">Company Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Company Number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Location</label>
                            <input type="text" name="location" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Company Profile Image</label>
                            <input type="file" name="company_img" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Company</button>
                        </div>
						<a href="company" class="btn btn-danger float-end">Cancel</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
