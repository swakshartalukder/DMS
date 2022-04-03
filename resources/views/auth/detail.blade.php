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
background: url(https://cdn.wallpapersafari.com/6/89/uEegLf.jpg);
height: 100vh;
-webkit-background-size: cover;
background-size: cover;
background-position: center center;
position: relative;
}
.detail-img{
        height: 200px;
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
.trending-image{
        height: 100px;
    }
    .trening-item{
        float: left;
        width: 20%;
        color: rgb(172, 241, 11);
        font-size: 20px;
    }
    .trending-wrapper{
        margin: 30px;
        color: rgb(120, 210, 233);
        font-size: 50px;
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
.welcome-text4 {
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
.welcome-text4 h1 {
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
.welcome-text h1 {
text-align: center;
color: rgb(255, 255, 255);
text-transform: uppercase;
font-size: 20px;
}
.welcome-text3 h1 {
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
margin-left: 630px;
margin-top: 380px;
display: inline-block;
color: #fff;
}
.welcome-text3 a {
border: 1px solid #fff;
padding: 10px 25px;
text-decoration: none;
text-transform: uppercase;
font-size: 14px;
margin-top: 10px;
display: inline-block;
color: #fff;
}
.welcome-text4 a {
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
.welcome-text3 a:hover {
background: #fff;
color: #333;
}
.welcome-text4 a:hover {
background: #fff;
color: #333;
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
    <title>Product Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
          <!-- akash ai sourse a logo ar address bosbe -->
            <img src="/image/logo.png" alt="logo"width="230" height="70">
        </div>
<ul class="nav-area">
  <li><a href="/bhome">Home</a></li>
           <li><a href="/bproduct">Product</a></li>
           <li><a href="bprofile">Profile</a></li>
           <li><a href="bsetting">Setting</a></li>
           <li><a href="/myorder">Orders</a></li>
           <li><a href="/cartlist">Cart({{$total}})</a></li>
           <li><a href="/blogout">Logout</a></li>
</ul>
</div>
<br><br>
<div class="container">
   <div class="row">
       <div class="welcome-text">
       <img class="detail-img" src="{{asset('uploads/product/'.$product->product_img)}}" alt="">
       </div>
       <div class="welcome-text1">
       <h1>{{$product->pname}}</h1>
       <h1>Brand : {{$product->pcompany}}</h1>
       <h1>Price: {{$product->price}}</h1>
        </div>
        <br>
        <form action="/add_to_cart" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Quantity</label>
            <input type="number" name="pquantity">
        </div>
        <input type="hidden" name="pprice" value={{$product->price}}>
        <input type="hidden" name="product_id" value={{$product->id}}>
        <button style="background-color:#1404ee;" class="welcome-text3">Add to Cart</button>
        </form>
       <br><br>
    </div>
   </div>
</div>
   </body>
</html>
