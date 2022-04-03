<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
     <style>
       @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
  background: #f2f2f2;
}
nav{
  background: #171c24;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  height: 70px;
  padding: 0 100px;
}
nav .logo{
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  letter-spacing: -1px;
}
nav .nav-items{
  display: flex;
  flex: 1;
  padding: 0 0 0 40px;
}
nav .nav-items li{
  list-style: none;
  padding: 0 15px;
}
nav .nav-items li a{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-decoration: none;
}
nav .nav-items li a:hover{
  color: #ff3d00;
}
nav form{
  display: flex;
  height: 40px;
  padding: 2px;
  background: #1e232b;
  min-width: 18%!important;
  border-radius: 2px;
  border: 1px solid rgba(155,155,155,0.2);
}
nav form .search-data{
  width: 100%;
  height: 100%;
  padding: 0 10px;
  color: #fff;
  font-size: 17px;
  border: none;
  font-weight: 500;
  background: none;
}
nav form button{
  padding: 0 15px;
  color: #fff;
  font-size: 17px;
  background: #ff3d00;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}
nav form button:hover{
  background: #e63600;
}
nav .menu-icon,
nav .cancel-icon,
nav .search-icon{
  width: 40px;
  text-align: center;
  margin: 0 50px;
  font-size: 18px;
  color: #fff;
  cursor: pointer;
  display: none;
}
nav .menu-icon span,
nav .cancel-icon,
nav .search-icon{
  display: none;
}
@media (max-width: 1245px) {
  nav{
    padding: 0 50px;
  }
}
@media (max-width: 1140px){
  nav{
    padding: 0px;
  }
  nav .logo{
    flex: 2;
    text-align: center;
  }
  nav .nav-items{
    position: fixed;
    z-index: 99;
    top: 70px;
    width: 100%;
    left: -100%;
    height: 100%;
    padding: 10px 50px 0 50px;
    text-align: center;
    background: #14181f;
    display: inline-block;
    transition: left 0.3s ease;
  }
  nav .nav-items.active{
    left: 0px;
  }
  nav .nav-items li{
    line-height: 40px;
    margin: 30px 0;
  }
  nav .nav-items li a{
    font-size: 20px;
  }
  nav form{
    position: absolute;
    top: 80px;
    right: 50px;
    opacity: 0;
    pointer-events: none;
    transition: top 0.3s ease, opacity 0.1s ease;
  }
  nav form.active{
    top: 95px;
    opacity: 1;
    pointer-events: auto;
  }
  nav form:before{
    position: absolute;
    content: "";
    top: -13px;
    right: 0px;
    width: 0;
    height: 0;
    z-index: -1;
    border: 10px solid transparent;
    border-bottom-color: #1e232b;
    margin: -20px 0 0;
  }
  nav form:after{
    position: absolute;
    content: '';
    height: 60px;
    padding: 2px;
    background: #1e232b;
    border-radius: 2px;
    min-width: calc(100% + 20px);
    z-index: -2;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  nav .menu-icon{
    display: block;
  }
  nav .search-icon,
  nav .menu-icon span{
    display: block;
  }
  nav .menu-icon span.hide,
  nav .search-icon.hide{
    display: none;
  }
  nav .cancel-icon.show{
    display: block;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  text-align: center;
  transform: translate(-50%, -50%);
}
.content header{
  font-size: 30px;
  font-weight: 700;
}
.content .text{
  font-size: 30px;
  font-weight: 700;
}
.space{
  margin: 10px 0;
}
nav .logo.space{
  color: red;
  padding: 0 5px 0 0;
}
@media (max-width: 980px){
  nav .menu-icon,
  nav .cancel-icon,
  nav .search-icon{
    margin: 0 20px;
  }
  nav form{
    right: 30px;
  }
}
@media (max-width: 350px){
  nav .menu-icon,
  nav .cancel-icon,
  nav .search-icon{
    margin: 0 10px;
    font-size: 16px;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.content header{
  font-size: 30px;
  font-weight: 700;
}
.content .text{
  font-size: 30px;
  font-weight: 700;
}
.content .space{
  margin: 10px 0;
}
table, th, td {
  border:1px solid black;
}

     </style>
      <meta charset="utf-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
     <nav>
        <div class="menu-icon">
           <span class="fas fa-bars"></span>
        </div>
        <br>
        <div class="logo">
           <img src="/image/logo.png" alt="logo"width="230" height="70">
        </div>
        <br>
        <div class="nav-items">
           <li><a href="home">Home</a></li>
           <li><a href="product">Product</a></li>
           <li><a href="sell">Sell</a></li>
           <li><a href="report">Report</a></li>
           <li><a href="company">Company</a></li>
           <li><a href="profile">Profile</a></li>
           <li><a href="contact">Contact</a></li>
           <li><a href="setting">Setting</a></li>
           <li><a href="/">Logout</a></li>
        </div>
        <br>
        <div class="search-icon">
           <span class="fas fa-search"></span>
        </div>
        <div class="cancel-icon">
           <span class="fas fa-times"></span>
        </div>
        <form action="#">
           <input type="search" class="search-data" placeholder="Search" required>
           <button type="submit" class="fas fa-search"></button>
        </form>
        <div class="nav-items">

        </div>
     </nav>
     <br>

     <div class="row justify-content-between"   >



       <div class="container" style="box-shadow: 0 4px 8px 0; rgba(0, 0, 0, .7);  max-width: 95%;  margin: auto;  text-align: center;  font-family: arial;">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header"style="background-color:#656f80">
                     <h4 class="card-title text-center">To Create a New Contact</h4>
                     <br>
                     <input style="background-color:#171c24; font-weight: 900;color: white;" type="button" onclick="location.href='{{url('create_contact')}}';" value="Click Here" />


                     <br><br><h4>Listed contact below</h4>
                   </div>
                   <div class="card-body"style="background-color:#656f80">

                     <table style="width:100%">
                         <thead>
                             <tr>
                                 <th>S. NO.</th>
                                 <th>Contact Name</th>
                                 <th>Contact Number</th>
                                 <th>location</th>
                                 <th>Designation</th>
                                 <th>Company Name</th>
                                 <th>Image</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                             </tr>
                         </thead>
                         <tbody>

                         @foreach ($contact as $item)

                             <tr>
                                 <td>{{ $item->id }}</td>
                                 <td>{{ $item->name }}</td>
                                 <td>{{ $item->phone }}</td>
                                 <td>{{ $item->location }}</td>
                                 <td>{{ $item->designation }}</td>
                                 <td>{{ $item->company_name }}</td>
                                 <td>
                                     <img src="{{asset('uploads/contacts/' .$item-> user_img) }}" width="70px" height="70px" alt="Image">
                                 </td>
                                 <td>

                                     <input style="background-color:#171c24; font-weight: 900;color: white;" type="button" onclick="location.href='{{url('edit_contact/'.$item->id )}}';" value="Edit" />
                                 </td>
                                 <td>
                                 <form action="{{ url('delete_contact/'.$item->id) }}" method="POST">
                                         @csrf
                                         @method('DELETE')
                                         <button style=background-color:#f44336; type="submit" class="btn btn-danger btn-sm"; >Delete</button>
                                     </form>

                                 </td>
                             </tr>
                             @endforeach

                         </tbody>
                     </table>





                   </div>
               </div>
           </div>
       </div>
       </div>
     </div>
      <script>
         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
      </script>
   </body>
</html>
