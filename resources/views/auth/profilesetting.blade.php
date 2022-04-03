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
    <title>Edit Profile</title>
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
    <button type="button" style="background-color:#b9fcac"><a href="contact">CONTRACT</a></button>
    <button type="button" style="background-color:#b9fcac"><a href="profile">PROFILE</a></button>


  </header>
  <br>
  <div class="container"style="background-color:#b9fcac">
    <h1 class="text-primary"><span class=""></span>Edit Profile</h1>
      <hr>
	<div class="row">

      <div class="col-md-3">
        <div class="text-center">
          <img src="" class="" alt="pic">
          <h6>Upload a different photo...</h6>

          <input type="file" class="form-control">
        </div>
      </div>


      <div class="col-md-9">

        <h3>Personal info</h3>

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

</div>

</body>
</html>
