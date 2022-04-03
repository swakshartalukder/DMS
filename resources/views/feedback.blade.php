<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  font-family: "Montserrat";
  background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://i.postimg.cc/YjcJg24M/aa.jpg);
  height: 100vh;
  -webkit-background-size: cover;
  background-size: cover;
  background-position: center center;
  position: relative;
}
header {

}
section {
  height: 100vh;
  width: 100%;

  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.container {
  width: 90%;
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0px 0px 20px #00000010;
  background-color: white;
  border-radius: 8px;
  margin-bottom: 20px;
}
.form-group {
  width: 100%;
  margin-top: 20px;
  font-size: 20px;
}
.form-group input,
.form-group textarea {
  width: 100%;
  padding: 5px;
  font-size: 18px;
  border: 1px solid rgba(128, 128, 128, 0.199);
  margin-top: 5px;
}

textarea {
  resize: vertical;
}
button[type="submit"] {
  width: 100%;
  border: none;
  outline: none;
  padding: 20px;
  font-size: 24px;
  border-radius: 8px;
  font-family: "Montserrat";
  color: rgb(27, 166, 247);
  text-align: center;
  cursor: pointer;
  margin-top: 10px;
  transition: 0.3s ease background-color;
}
button[type="submit"]:hover {
  background-color: rgb(214, 226, 236);
}
button[type="home"] {
  width: 100%;
  border: none;
  outline: none;
  padding: 20px;
  font-size: 24px;
  border-radius: 8px;
  font-family: "Montserrat";
  color: rgb(27, 166, 247);
  text-align: center;
  cursor: pointer;
  margin-top: 10px;
  transition: 0.3s ease background-color;
}
button[type="home"]:hover {
  background-color: rgb(214, 226, 236);
}
#status {
  width: 90%;
  max-width: 500px;
  text-align: center;
  padding: 10px;
  margin: 0 auto;
  border-radius: 8px;
}
#status.success {
  background-color: rgb(211, 250, 153);
  animation: status 4s ease forwards;
}
#status.error {
  background-color: rgb(250, 129, 92);
  color: white;
  animation: status 4s ease forwards;
}
@keyframes status {
  0% {
    opacity: 1;
    pointer-events: all;
  }
  90% {
    opacity: 1;
    pointer-events: all;
  }
  100% {
    opacity: 0;
    pointer-events: none;
  }
}
{
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



}

    </style>
    <meta charset="utf-8">
    <title>Contact us</title>
  </head>
  <body>


    <section><br>
      <br>
  <div class="container">
    <form action="https://formspree.io/f/xqkwvozj" method="POST" id="my-form">

      <div class="form-group">
        <label for="firstName"> First Name</label>
        <input type="text" id="firstName" name="firstName">
      </div>

      <div class="form-group">
        <label for="latsName">Last Name</label>
        <input type="text" id="lastName" name="lastName">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="massage">Message</label>
        <textarea name="massage" id="massage" cols="30" rows="10"></textarea>
      </div>

      <button type="submit">Submit</button>
      <button type="home"><a href="/"style="color:rgb(27, 166, 247)">Back To The Home Page</a></button>

    </form>
  </div>
  <div id="status"></div>
</section>
<script>
window.addEventListener("DOMContentLoaded", function () {
// get the form elements defined in your form HTML above

var form = document.getElementById("my-form");
// var button = document.getElementById("my-form-button");
var status = document.getElementById("status");

// Success and Error functions for after the form is submitted

function success() {
  form.reset();
  status.classList.add("success");
  status.innerHTML = "Thanks!";
}

function error() {
  status.classList.add("error");
  status.innerHTML = "Oops! There was a problem.";
}

// handle the form submission event

form.addEventListener("submit", function (ev) {
  ev.preventDefault();
  var data = new FormData(form);
  ajax(form.method, form.action, data, success, error);
});
});

// helper function for sending an AJAX request

function ajax(method, url, data, success, error) {
var xhr = new XMLHttpRequest();
xhr.open(method, url);
xhr.setRequestHeader("Accept", "application/json");
xhr.onreadystatechange = function () {
  if (xhr.readyState !== XMLHttpRequest.DONE) return;
  if (xhr.status === 200) {
    success(xhr.response, xhr.responseType);
  } else {
    error(xhr.status, xhr.response, xhr.responseType);
  }
};
xhr.send(data);
}

</script>
  </body>
</html>
