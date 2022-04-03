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
    <title>Edit Company</title>
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
                    <h4>Edit Company</h4>
                </div>
                <div class="card-body">

                    <form action="{{url('update_company/'.$company->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Company Name</label>
                            <input type="text" name="name" value="{{$company-> name}}" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Company Number</label>
                            <input type="text" name="phone"  value="{{$company-> phone}}" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Location</label>
                            <input type="text" name="location" value="{{$company-> location}}" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email"  value="{{$company-> email}}" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Company Profile Image</label>
                            <input type="file" name="company_img" class="form-control">
                            <img src="{{asset('uploads/companys/' .$company-> company_img) }}" width="70px" height="70px" alt="Image">
                        </div>



                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Company</button>
                        </div>
						<a href="{{url('company')}}" class="btn btn-danger float-end">Cancel</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
