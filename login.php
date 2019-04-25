<!DOCTYPE html>
<html>

<head>
  <title>SENSEI | LOGIN</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="login.css" rel="stylesheet">
 

</head>
<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
           <a class="navbar-brand" href="home.html">SENSEI</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="home.html">Home</a></li>
            <li><a href="forstudents.html">For Students</a></li>
            <li><a href="fortutors.html">For Tutors</a></li>
            <li class="active"><a href="login.html">Login</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="login-page">
    <div class="form">
      <form class="register-form">
        <input type="text" placeholder="name" name="username" />
        <input type="password" placeholder="password" name="password" />
        <input type="email" placeholder="email address" name="email" />
        <input type="text" placeholder="student/tutor" name="type"/>
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form class="login-form">
        <input type="text" placeholder="username"/>
        <input type="password" placeholder="password"/>
        <button>login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>
  <script type="text/javascript">
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
  </script>
</body>
</html>