<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

<style>

header {
  background-color: #71ed6d;
  padding: 20px;
  text-align: center;
  font-size: 12px;
  color: black;
}


.bg{
    background-image: url(/image/1.jpg)  ;
    height: 950px;
    position: relative;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
footer {
  background-color: #821f17;
  padding: 20px;
  text-align: center;
  color: #71ed6d;
}


</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit Product</title>
  </head>
  <body >
<div class="bg">




  <header>

    <div class="row justify-content-between">
        <div class="col-md-1">
          <img src="/image/logo.png" alt="logo"width="230" height="70">
        </div>

        <div class="col-md-3">
          <input type="text" placeholder="Search..">
  <dl>
        <br><button type="button" style="background-color:#b9fcac"><a href="login">LogOut</a></button>
        </div>

    </div>
    <button type="button" style="background-color:#b9fcac"><a href="home">Home</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="product">PRODUCT</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="sell">SELL</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="buy">BUY</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="daily">DAILY SUMMARY</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="report">REPORT</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="calc">CALCULATION</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="company">COMPANY DETAILS</a></button>
	<button type="button" style="background-color:#b9fcac"><a href="contact">CONTACT</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="profile">PROFILE</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="setting">SETTINGS</a></button>

  </header>


  <br>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-6">

        @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif


            <div class="card" style="background-color:#b9fcac; box-shadow: 0 4px 8px 0; rgba(0, 0, 0, 1);  max-width: 95%;  margin: auto;  text-align: center;  font-family: arial;">
                <div class="card-header">
                    <h4>Sell Product</h4>
                </div>
                <div class="card-body">

                    <form action="{{url('sell_product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                            <label for="">Product ID</label>
                            <input type="number" name="pid" value="{{$products-> id}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" value="{{$products-> pname}}" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Product Company</label>
                            <input type="text" name="pcompany"  value="{{$products-> pcompany}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Price</label>
                            <input type="text" name="price" value="{{$products-> price}}" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Quantity</label>
                            <input type="number" name="quantity" value="{{$products-> quantity}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Image</label>
                            <input type="file" name="pimg" class="form-control">
                            <img src="{{asset('uploads/product/' .$products-> product_img) }}" width="70px" height="70px" alt="Image">
                        </div>



                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Sell Product</button>
                        </div>
						<a href="{{url('show')}}" class="btn btn-danger float-end">Cancel</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
