<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

<style>


.bg{
    background-color: #a4afbf;
    height: 950px;
    position: relative;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}


</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Settings</title>
  </head>
  <body >
<div class="bg">
  <br>

  <div class="container"style="background-color:#171c24;color: white;">
    <h1 class="text-primary"><span class=""></span>Edit Profile</h1>
      <hr>
	<div class="row">




      <div class="col-md-9">


        <h3>Personal info</h3>

        <form  class="form-horizontal" role="form" action="{{url('update_profile/'.$profile->id)}}" method="POST" enctype= "multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="fname" value="{{$profile->fname}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lname" value="{{$profile->lname}}" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="company" value="{{$profile->company}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" name="email" value="{{$profile->email}}">
            </div>
          </div>


          <div class="form-group">
            <label class="col-lg-3 control-label">Profile Image</label>
            <div class="col-lg-8">
              <input class="form-control" type="file" name="profile_img">
              <img src="{{asset('uploads/profiles/' .$profile-> profile_img)}}" width="70px" height="70px" alt="Image">
            </div>

            <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" style="background-color:green">Update Profile</button>

                        </div>


            <div class="form-group mb-3">
          <button type="button" class="btn btn-primary" style="background-color:#f44336;"><a style="color: white;" href="/profile">Cancle</a></button>
            </div>

        </form>
      </div>
  </div>
</div>
<hr>

</div>

</body>
</html>
