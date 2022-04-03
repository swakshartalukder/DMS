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
background: url(https://images.unsplash.com/photo-1528465424850-54d22f092f9d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y292ZXIlMjBwaG90b3xlbnwwfHwwfHw%3D&w=1000&q=80);
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
        color: rgb(243, 245, 245);
        font-size: 20px;
    }
    .trending-wrapper{
        margin: 30px;
        color: rgb(244, 249, 250);
        font-size: 20px;
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
margin-top: -100px;
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
margin-top: -50px;
margin-left: 700px;
text-align: center;
}
.welcome-text2 h1 {
text-align: center;
color: rgb(18, 156, 0);
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
.welcome-text2 a {
border: 1px solid rgb(13, 241, 6);
padding: 10px 25px;
text-decoration: none;
text-transform: uppercase;
font-size: 14px;
margin-top: -400px;
display: inline-block;
color: rgb(13, 241, 6);
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
border: 1px solid rgb(255, 255, 255);
padding: 10px 25px;
text-decoration: none;
text-transform: uppercase;
font-size: 14px;
margin-top: 1px;
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
background: rgb(13, 241, 6);
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
  <li><a href="bhome">Home</a></li>
           <li><a href="/bproduct">Product</a></li>
           <li><a href="bprofile">Profile</a></li>
           <li><a href="bsetting">Setting</a></li>
           <li><a href="/myorder">Orders</a></li>
           <li><a href="/blogout">Logout</a></li>
</ul>
</div>
     <br><br><br><br>
        <div class="trending-wrapper">
            <h3>Result for Products</h3>
            <br>
            <div class="welcome-text2">
            <a href="ordernow">Order Now</a> <br>
            </div>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{asset('uploads/product/'.$item->product_img)}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->pname}}</h2>
                      <h5>{{$item->pcompany}}</h5>
                      <h5>{{$item->price}}</h5>
                      <br>
                    </div>
             </div>
             <div class="welcome-text">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
             </div>
            </div>
            @endforeach
          </div>
     </div>
</div>
   </body>
</html>
