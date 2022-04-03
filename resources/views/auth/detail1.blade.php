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
background: url(https://supermodel-bestawards.s3.amazonaws.com/resized/migrated/entry/2425/AFS-0-1172-0-826.jpg?k=2ec5ba3b4e);
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
    <title>Company</title>
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
  <!-- eta navigaton area -->
<li><a href="/home">Home</a></li>
<li><a href="/product">Product</a></li>
<li><a href="/sell">Sell</a></li>
<li><a href="/report">Report</a></li>
<li><a href="/profile">Profile</a></li>
<li><a href="/contact">Contact</a></li>
<li><a href="/setting">Setting</a></li>
<li><a href="/logout">Logout</a></li>
</ul>
</div>
      <br>
      <br>
      <br>
      <br>
<div class="container">
   <div class="row">
       <div class="welcome-text">
       <img class="detail-img" src="{{asset('uploads/companys/'.$company->company_img)}}">
       </div>
       <div class="welcome-text1">
       <h1>{{$company->name}}</h1>
       <h1>Location : {{$company->location}}</h1>
       <h1>Email: {{$company->email}}</h1>
       <h1>Phone Number: {{$company->phone}}</h1>
       <a href="{{url('edit_company/'.$company->id )}}">Edit</a>
       <form action="{{ url('delete_company/'.$company->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button style="background-color:#f44336;" type="submit" class="welcome-text3">Delete</button>
       </form>
    </div>
   </div>
</div>
   </body>
</html>
