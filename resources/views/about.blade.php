<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
  background: linear-gradient(rgba(01, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://i.postimg.cc/YjcJg24M/aa.jpg);
  height: 100vh;
  -webkit-background-size: cover;
  background-size: cover;
  background-position: center center;
  position: relative;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  color: #000;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: #00fecb;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #16a085;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1 class="title">Dealership Management System</h1>
  <p class="title">We Are Actually A New Startup Company.</p>
  <p class="title">Our Target is To make Your Business Smother</p>
</div>

<h2 class="title" style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/image/shawon.jpg" alt="shawon" width="300" height="300">
      <div class="container">
        <h2 class="title">Shariful Islam Shawon</h2>
        <p class="title">Devoloper</p>
        <p class="title">still working</p>
        <p class="title">sharifulislam3g@gmail.com</p>
        <p><button class="button"><a href="https://www.facebook.com/SharifulIslamshawon17" style="color:white;">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/image/akash.jfif" alt="akash" width="300" height="300">
      <div class="container">
        <h2 class="title">Abu Saleh akash</h2>
        <p class="title">Devoloper</p>
        <p class="title">still working</p>
        <p class="title">Abusalehakash@gmail.com</p>
        <p><button class="button"><a href="https://www.facebook.com/abusaleh.akash" style="color:white;">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/image/Swakshar.jfif" alt="Swakshar" width="300" height="300">
      <div class="container">
        <h2 class="title">Swakshar Talukder</h2>
        <p class="title">Devoloper</p>
        <p class="title">still working</p>
        <p class="title">talukderabir77@gmail.com</p>
        <p><button class="button"><a href="https://www.facebook.com/abir.talukder.313" style="color:white;">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>
<footer>
<p><button class="button"><a href="/" style="color:white;">Home</a></button></p>
</footer>
</body>
</html>
