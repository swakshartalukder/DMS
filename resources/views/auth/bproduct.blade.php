<?php
use App\Http\Controllers\aProductController;
$total=0;
if(Session::has('LoggedUser1'))
{
  $total= aProductController::cartItem();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  * {
margin: 0;
padding: 0;
}
body {
font-family: 'Poppins', sans-serif;
}
.wrapper {
width: 1170px;
margin: auto;
}
header {
background: url(https://t4.ftcdn.net/jpg/03/29/57/63/360_F_329576340_zBRuVjvHWe9zgh2b2C5fwQNITE8oGsv5.jpg);
height: 100vh;
-webkit-background-size: cover;
background-size: cover;
background-position: center center;
position: relative;
}
.detail-img{
        height: 200px;
    }
    .trending-image{
        height: 100px;
    }
    .trening-item{
        float: left;
        width: 20%;
        color: rgb(168, 248, 237);
        font-size: 20px;
    }
    .trending-wrapper{
        margin: 30px;
        color: rgb(120, 210, 233);
        font-size: 50px;
    }
.nav-area {
float: right;
list-style: none;
margin-top: 30px;
}
.nav-area li {
display: inline-block;
}
.nav-area li a {
color: #fff;
text-decoration: none;
padding: 5px 20px;
font-family: poppins;
font-size: 16px;
text-transform: uppercase;
}
.nav-area li a:hover {
background: #fff;
color: #333;
}
.logo {
float: left;
}
.logo img {
width: 100%;
padding: 15px 0;
}
.welcome-text {
position: absolute;
width: 600px;
height: 300px;
margin-top: 50px;
margin-left: 400px;
text-align: center;
}
.welcome-text1 {
position: absolute;
width: 600px;
height: 300px;
margin-top: 300px;
margin-left: 400px;
text-align: center;
}
.welcome-text2 {
position: absolute;
width: 600px;
height: 300px;
margin-top: 200px;
margin-left: 700px;
text-align: center;
}
.welcome-text2 h1 {
text-align: center;
color: rgb(255, 255, 255);
text-transform: uppercase;
font-size: 20px;
}
.welcome-text1 h1 {
text-align: center;
color: rgb(255, 255, 255);
text-transform: uppercase;
font-size: 20px;
}
.welcome-text h1 span {
color: #00fecb;
}
.welcome-text2 a {
border: 1px solid #fff;
padding: 10px 25px;
text-decoration: none;
text-transform: uppercase;
font-size: 14px;
margin-top: 10px;
display: inline-block;
color: #fff;
}
.welcome-text1 a {
border: 1px solid #fff;
padding: 10px 25px;
text-decoration: none;
text-transform: uppercase;
font-size: 14px;
margin-top: 10px;
display: inline-block;
color: #fff;
}
.welcome-text3 {
border: 1px solid #fff;
padding: 10px 25px;
text-decoration: none;
text-transform: uppercase;
font-size: 14px;
margin-top: 10px;
display: inline-block;
color: #fff;
}
.welcome-text a {
border: 1px solid #fff;
padding: 10px 25px;
text-decoration: none;
text-transform: uppercase;
font-size: 14px;
margin-top: 10px;
display: inline-block;
color: #fff;
}
.welcome-text a:hover {
background: #fff;
color: #333;
}
.welcome-text1 a:hover {
background: #fff;
color: #333;
}
.welcome-text2 a:hover {
background: #fff;
color: #333;
}
/*resposive*/

@media (max-width:600px) {
.wrapper {
  width: 100%;
}
.logo {
  float: none;
  width: 50%;
  text-align: center;
  margin: auto;
}
img {
  width: ;
}
    .custom-product{
        height: 600px
    }
.nav-area {
  float: none;
  margin-top: 0;
}
.nav-area li a {
  padding: 5px;
  font-size: 11px;
}
.nav-area {
  text-align: center;
}
.welcome-text {
  width: 100%;
  height: auto;
  margin: 30% 0;
}
.welcome-text h1 {
  font-size: 30px;
}
}

  </style>
    <meta charset="UTF-8">
    <title>Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
          <!-- akash ai sourse a logo ar address bosbe -->
            <img src="/image/logo.png" alt="logo"width="250" height="90">
        </div>
        <ul class="nav-area">
  <!-- eta navigaton area -->
<li><a href="bhome">Home</a></li>
           <li><a href="bprofile">Profile</a></li>
           <li><a href="bsetting">Setting</a></li>
           <li><a href="/myorder">Orders</a></li>
           <li><a href="/cartlist">Cart({{$total}})</a></li>
           <li><a href="/blogout">Logout</a></li>
</ul>
</div>
      <br>
      <br>
      <br>
      <br>
     @extends("auth.master")

     <div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
        <div class="item {{$item->id==120?'active':''}}">
        <a href="detail/{{$item->id}}">
              <img class="slider-img" src="{{asset('uploads/product/'.$item->product_img)}}">
            <div class="carousel-caption slider-text">
              <h3>{{$item->pname}}</h3>
              <p>{{$item->pcompany}}</p>
            </div>
            </a>
          </div>

          @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach($products as $item)
        <div class="trening-item">
          <a href="detail/{{$item->id}}">
          <img class="trending-image" src="{{asset('uploads/product/'.$item->product_img)}}">
          <div class="">
            <h3>{{$item->pname}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
   </body>
</html>
