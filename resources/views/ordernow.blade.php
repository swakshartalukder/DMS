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
background: url(https://media.istockphoto.com/photos/dark-blue-abstract-background-picture-id877787978?k=20&m=877787978&s=170667a&w=0&h=pEpJm2N4SYqz4K98n2PtO--rAeFCUXspKsVdNHIgcLk=);
height: 1000000vh;
}
.wrapper {
width: 1170px;
margin: auto;
}
header {
height: 100vh;
-webkit-background-size: cover;
background-size: cover;
background-position: center center;
position: relative;
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
        color: rgb(168, 248, 237);
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
margin-top: 100px;
margin-left: 400px;
text-align: center;
}
.welcome-text1 {
position: absolute;
width: 600px;
height: 300px;
margin-top: 200px;
margin-left: 100px;
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
.welcome-text h1 {
text-align: center;
color: rgb(255, 255, 255);
text-transform: uppercase;
font-size: 20px;
}
.welcome-text h1 span {
color: #00fecb;
}
.table {
    font-size: 18px;
    color: #fff;
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
    <title>Orders</title>
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
<li><a href="/bhome">Home</a></li>
           <li><a href="/bproduct">Product</a></li>
           <li><a href="bprofile">Profile</a></li>
           <li><a href="bsetting">Setting</a></li>
           <li><a href="/blogout">Logout</a></li>
           </ul>
</div>
     @extends('auth.master')
     <div class="custom-product">
     <div class="welcome-text">
        <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>{{$total2}} Tk</td>
      </tr>
      <tr>
        <td>Tax 1%</td>
        <td>{{$total2*0.01}} Tk</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>10 Tk</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total2+($total2*0.01)+10}} Tk</td>
      </tr>
    </tbody>
  </table>
  <div>
      <form action="/orderplace" method="POST">
        @csrf
  <div class="table">
    <input type="text" name="address" placeholder="Enter Your Address" class="form-control">
  </div>
  <br>
<div class="table">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value="Cash" name="payment"><span>   Online Payment</span><br><br>
    <input type="radio" value="Cash" name="payment"><span>   EMI Payment</span><br><br>
    <input type="radio" value="Cash" name="payment"><span>   Payment On Delivery</span><br><br>
  </div>
  <button type="submit" class="btn btn-success">Order Now</button>
</form>
  </div>
     </div>
     </div>
   </body>
</html>
