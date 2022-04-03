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
    <title>Add Product</title>
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
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                            <label for="">Product ID</label>
                            <input type="number" name="pid" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="pname" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="company-content">Product Company</label>
                            <select name="pcom" class="form-control">
                            @foreach ($data as $row)
                            <option value="{{$row->name}}">{{$row->name}}
                                </option>
                            @endforeach
                            </select>
                        </div>
						<div class="form-group mb-3">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Quantity</label>
                            <input type="number" name="quantity" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Image</label>
                            <input type="file" name="pimg" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
						<a href="product" class="btn btn-danger float-end">Cancel</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
