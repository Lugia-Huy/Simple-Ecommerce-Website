<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no">

      <!-- Bootstrap CSS -->

      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->

      <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
      <link rel="stylesheet" href="style.css">

      <title>Login</title>
   </head>
   <body>
         <?php
         require('connection.php');
         
         session_start();
         if (isset($_POST["btn_submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $username = strip_tags($username);
            $username = addslashes($username);
            $password = strip_tags($password);
            $password = addslashes($password);
            if ($username == "" || $password =="") {
               echo "<p>Your's username or password can not blank!<p>";
            }else{
               $sql = "select * from users where username = '$username' and password = '$password' ";
               $query = mysqli_query($conn,$sql);
               $num_rows = mysqli_num_rows($query);
               if ($num_rows==0) {
                  echo "<p>Username or password is not correct!<p>";
               }else{
                  $_SESSION['username'] = $username;
                  header('Location: index.php');
               }
            }
         }
         ?>

      <div class="container">
         <div class="row">
			   <div class="col-md-5 mx-auto">
               <div id="first">
                  <div class="myform form ">
                     <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                           <h1>Login</h1>
                        </div>
                     </div>
                        <form action="" method="post" name="login">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" name="username"  class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                                 </div>
                                 <div class="form-group">
                                    <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                                 </div>
                                 <div class="col-md-12 text-center ">
                                    <button type="submit" name="btn_submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                                 </div>
                                 <hr>
                                 <div class="form-group">
                                    <p class="text-center">Don't have account? <a href="register.php" id="signup">Sign up here</a></p>
                                 </div>
                        </form>
                     </div>
                  </div>
			      </div>
		      </div>
         </div>
      </div>   
         
   </body>
</html>