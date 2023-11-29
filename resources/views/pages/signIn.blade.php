<!DOCTYPE html>
<html lang="en">
<head>
    <title> Sign In</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <style>
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #009579;
}
.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: #fff;
  border-radius: 7px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
}
.container .registration{
  display: none;
}
#check:checked ~ .registration{
  display: block;
}
#check:checked ~ .login{
  display: none;
}
#check{
  display: none;
}
.container .form{
  padding: 2rem;
}
.form header{
  font-size: 2rem;
  font-weight: 500;
  text-align: center;
  margin-bottom: 1.5rem;
}
 .form input{
   height: 60px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #009579;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}
.form input.button{
  color: #fff;
  background: #009579;
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 1px;
  margin-top: 1.7rem;
  cursor: pointer;
  transition: 0.4s;
}
.form input.button:hover{
  background: #006653;
}
.signup{
  font-size: 17px;
  text-align: center;
}
.signup label{
  color: #009579;
  cursor: pointer;
}
.signup label:hover{
  text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
            <header>Sign in to your BrainStorming site   </header>
              
                <form action="{{route('login-user')}}" method="post">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
       
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="you@example.com">
                <span class="text-danger">
                    @error('email')
                         {{$message}}
                    @enderror
                </span>
            </div>
       
            <div class="form-group">
                <strong>Password</strong>
                <input type="password" name="password" class="form-control" placeholder="">
                <span class="text-danger">
                  @error('password')
                      {{$message}}
                  @enderror
                </span>
            </div>
           
                <input type="submit" class="button" value="Sign in">
      

        <div class="form-group">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
               <a href="{{ route('login.google')}}" class="btn btn-danger btn-block">Login with Google</a>
               <a href="{{ route('login.facebook')}}" class="btn btn-primary btn-block">Login with Facebook</a>
               <a href="{{ route('login.github')}}" class="btn btn-dark btn-block">Login with Github</a>
            </div>
            </div>
        
        <!-- <h6>Don't have an account? <a href="registration"> Sign up  </a></h6> -->
    
    </form>
    
</body>
</html>

