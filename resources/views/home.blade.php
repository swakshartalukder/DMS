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
background: linear-gradient(rgba(8, 8, 8, 0.8), rgba(250, 249, 249, 0.8)), url(https://thumbs.dreamstime.com/b/pattern-135191604.jpg);
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
margin: 20% 30%;
text-align: center;
}
.welcome-text h1 {
text-align: center;
color: #fff;
text-transform: uppercase;
font-size: 60px;
}
.welcome-text h1 span {
color: #00fecb;
}
.welcome-text a {
border: 1px solid #fff;
padding: 10px 25px;
text-decoration: none;
text-transform: uppercase;
font-size: 14px;
margin-top: 20px;
display: inline-block;
color: #fff;
}
.welcome-text a:hover {
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
    <title>Home</title>
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
<li><a href="home">Home</a></li>
            <li><a href="product">Product</a></li>
            <li><a href="sell">Sell</a></li>
            <li><a href="report">Report</a></li>
            <li><a href="company">Company</a></li>
            <li><a href="profile">Profile</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="setting">Setting</a></li>
            @if (Session::has('LoggedUser'))
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">{{Session::get('LoggedUser')['name']}}
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">Logout</a></li>
                    </ul>
            </li>
            @endif
</ul>
</div>

<div class="welcome-text">
      <p style="font-size:100px; font-family:Cursive ;"><marquee behavior="scroll" direction="left">.......Welcome To Our site.......</marquee></p>
      <p style="font-size:100px; font-family:Cursive ;"><marquee behavior="scroll" direction="left">Manage Your Business Easily</marquee></p>
    </div>
</header>

</body>
</html>
