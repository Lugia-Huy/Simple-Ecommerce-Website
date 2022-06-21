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

      <title>Register</title>
   </head>
   <body>
         <?php
         require_once('connection.php');
         if (isset($_POST["btn_submit"])) {
            $username = $_POST["username"];
            $password = $_POST["pass"];
            $name = $_POST["name"];
            $email = $_POST["email"];

            if ($username == "" || $password == "" || $name == "" || $email == "") {
                echo "Please fill all infomation in this form!";
            }else{
               $sql="select * from users where username='$username'";
               $kt=mysqli_query($conn, $sql);
   
               if(mysqli_num_rows($kt) > 0){
                  echo '<span style="color:#FFF;text-align:center;"><strong>Sorry, account was existed!</strong></span>';
               }else{
                  $sql = "INSERT INTO users(username,password,name,email)
                  VALUES ('$username','$password','$name','$email')";
                     mysqli_query($conn,$sql);
                     echo '<span style="color:#FFF;text-align:center;"><strong>Congratulation, you have registration successful!</strong></span>';
					 echo '<span style="color:#FFF;text-align:center;"><strong>Click <a href="login.php">Here!!!</a> to login or click the text below Get started button.</strong></span>';
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
                              <h1>Signup</h1>
                           </div>
                        </div>
                        <form action="" method="post" name="registration">
                           <div class="form-group">
                              <label for="exampleInputEmail1">User Name</label>
                              <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter user name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="pass" id="pass"  class="form-control" aria-describedby="emailHelp" placeholder="Enter password">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text"  name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="text" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" name="btn_submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="login.php" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </body>
</html>