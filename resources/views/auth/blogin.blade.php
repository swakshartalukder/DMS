<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
    *:focus {
      outline: none;
    }

    body {
      margin: 0;
      padding: 0;
      background-image: url(https://miro.medium.com/max/1018/1*iAu65xDmvpVdBJgps6EDEw.png);
      background-size: cover;
      background-position: center center;
      font-size: 16px;
      color: #222;
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
    }

    #login-box {
      position: relative;
      margin: 5% auto;
      width: 600px;
      height: 400px;
      background: #FFF;
      border-radius: 2px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .left {
      position: absolute;
      top: 0;
      left: 0;
      color: #FFF;
      box-sizing: border-box;
      padding: 40px;
      width: 300px;
      height: 400px;
      background: url('https://c1.wallpaperflare.com/preview/209/732/945/fantasy-landscape-forest-secret.jpg');
      background-size: cover;
      background-position: center;
      border-radius: 0 2px 2px 0;
    }

    h1 {
      margin: 0 0 20px 0;
      font-weight: 300;
      font-size: 28px;
    }

    input[type="text"],
    input[type="password"] {
      display: block;
      box-sizing: border-box;
      margin-bottom: 20px;
      padding: 4px;
      width: 220px;
      height: 32px;
      border: none;
      border-bottom: 1px solid #AAA;
      font-family: 'Roboto', sans-serif;
      font-weight: 400;
      font-size: 15px;
      transition: 0.2s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-bottom: 2px solid #16a085;
      color: #16a085;
      transition: 0.2s ease;
    }

    input[type="submit"] {
      margin-top: 28px;
      width: 120px;
      height: 32px;
      background: #16a085;
      border: none;
      border-radius: 2px;
      color: #FFF;
      font-family: 'Roboto', sans-serif;
      font-weight: 500;
      text-transform: uppercase;
      transition: 0.1s ease;
      cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="submit"]:focus {
      opacity: 0.8;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
      transition: 0.1s ease;
    }

    input[type="submit"]:active {
      opacity: 1;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
      transition: 0.1s ease;
    }

    .or {
      position: absolute;
      top: 180px;
      left: 280px;
      width: 40px;
      height: 40px;
      background: #DDD;
      border-radius: 50%;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
      line-height: 40px;
      text-align: center;
    }

    .right {
      position: absolute;
      top: 0;
      right: 0;
      box-sizing: border-box;
      padding: 40px;
      width: 300px;
      height: 400px;
      background: url('https://i.postimg.cc/YjcJg24M/aa.jpg');
      background-size: cover;
      background-position: center;
      border-radius: 0 2px 2px 0;
    }

    .right .loginwith {
      display: block;
      margin-bottom: 40px;
      font-size: 28px;
      color: #000000;
      text-align: center;
    }

    button.social-signin {
      margin-bottom: 20px;
      width: 220px;
      height: 36px;
      border: none;
      border-radius: 2px;
      color: #FFF;
      font-family: 'Roboto', sans-serif;
      font-weight: 500;
      transition: 0.2s ease;
      cursor: pointer;
    }

    button.social-signin:hover,
    button.social-signin:focus {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
      transition: 0.2s ease;
    }

    button.social-signin:active {
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
      transition: 0.2s ease;
    }


    button.social-signin.sign {
      background: #16a085;
    }
    button.social-signin.home {
      background: #16a085;
    }
    </style>
    <meta charset="utf-8">
    <title>E-Mart Login</title>
  </head>
  <body>
    <div id="login-box">
    <div class="left">
      <h1>E-Mart<br><br>Log in Here</h1>
      <form action="{{ route('auth.bcheck') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
           @csrf
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="bemail" placeholder="Enter email address" value="{{ old('bemail') }}">
                 <span class="text-danger">@error('bemail'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="bpassword" placeholder="Enter password">
                 <span class="text-danger">@error('bpassword'){{ $message }} @enderror</span>
              </div>
              <input type="submit" value="Login" />
      </form>
    </div>

    <div class="right">
      <span class="loginwith">Don't have A <BR>DMS<br>Buyer Account<br /></span>
        <button class="social-signin sign"><a  href="{{ route('auth.bsignup') }}" style="color:white">Signup Here</a></button>
        <button class="social-signin home"><a href="/" style="color:white">Go Back To HomePage</a></button>

    </div>
    <div class="or">OR</div>
  </div>
  </body>
</html>
