<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>ParKing</title>

   <link rel="shortcut icon" href="images/icon/logo.png" type="image/x-icon">
   <link rel="icon" href="images/icon/logo.png" type="image/x-icon" >


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!-- class="fas fa-arrow-left  :-script -->
  <script src="https://kit.fontawesome.com/a0408e60a8.js" crossorigin="anonymous"></script>

  <style type="text/css">

  body {
    background: url("/assets/landowner/img/background.jpg");
}
.box{
 position: relative;
 top: 150px;
 width:500px;
 margin:0 auto;
 border:1px solid #ccc;
 background: url("public/images/signupdriver.jpg")
}
   .t-r {
       position: absolute;
       right: 10px;
       top: 18px;
   }
   .links > a {
       color: #000;
       padding: 0 25px;
       font-size: 13px;
       font-weight: 600;
       letter-spacing: .1rem;
       text-decoration: none;
       text-transform: uppercase;
   }
   .label {
   color: white;
   padding: 8px;
   font-family: Arial;
   font: 15px arial, sans-serif;
   font-weight: bold;
 }
 .label1 {
 color: white;
 padding: 8px;
 font-family: Arial;
 font: 30px arial, sans-serif;
 font-weight: bold;
}
  </style>
 </head>
 <body>
   <div class="t-r links">
     <i class="fas fa-arrow-left"></i><a href="{{ url('/signin') }}">BACK</a>
   </div>

  <br />
  <div class="container box">
   <h3 align="center"><span class="label1 success">Driver SignUp</span></h3><br />

   @if(isset(Auth::user()->email))
    <script>window.location="/main/successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form  action="/signupdriver" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label><span class="label success">First name</span></label>
      <input type="text" name="firstname" class="form-control" />
     </div>
     <div class="form-group">
      <label><span class="label success">Last name</span></label>
      <input type="text" name="lastname" class="form-control" />
     </div>
     <div class="form-group">
      <label><span class="label success">Gender</span></label><br>
      <input type="radio" name="gender" value="Male" class="" /><span class="label success"> Male</span><br>
      <input type="radio" name="gender" value="Female" class="" /><span class="label success"> Female</span><br>
     </div>
     <div class="form-group">
      <label><span class="label success">Contact number</span></label>
      <input type="text" name="contactno" class="form-control" maxlength="10"/>
     </div>
     <div class="form-group">
      <label><span class="label success">Address</span></label>
      <input type="text" name="address" class="form-control" maxlength="10"/>
     </div>
     <div class="form-group">
      <label><span class="label success">License Id</span></label>
      <input type="text" name="license" class="form-control" maxlength="20"/>
     </div>
     <div class="form-group">
      <label><span class="label success">NIC No.</span></label>
      <input type="text" name="nic" class="form-control" maxlength="12" minlength="10"/>
     </div>
     <div class="form-group">
      <label><span class="label success">Email</span></label>
      <input type="email" name="email" class="form-control"/>
     </div>
    <div class="form-group">
     <label><span class="label success">Username</span></label>
     <input type="text" name="username" class="form-control" autocomplete="false" />
    </div>
    <div class="form-group">
     <label><span class="label success">Password</span></label>
     <input type="password" name="password" class="form-control" autocomplete="false" />
    </div>
    <div class="form-group">
      <label><span class="label success">Confirm password</span></label>
      <input type="password" name="conpassword" class="form-control" />
     </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>
   </form>
  </div>
 </body>
</html>
