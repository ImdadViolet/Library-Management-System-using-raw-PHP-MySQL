
<?php
  include("connection.php");
  include("../assets/layout/navbar.php");
 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
.sec{
height: 650px; 
width: 100%;
}
.img{
height: 650px; width: 100%;
}
  
.banner{
position: absolute;
top: 100px;
left: 500px;
background-color: dodgerblue;
height: 460px;
width: 500px;
text-align: center;
color: white;
padding-top: 30px;
opacity: 1
}

  
</style>
<body>
 

<div class="sec">
<div>
  <img class="img" src="../assets/img/bookss.jpg">
</div>


<div class="books col-md-3">  



  </div>
</div>


<?php
  if(isset($_POST['submit']))
  {
  echo $_POST['username'];
  $count=0;
  $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
  $count=mysqli_num_rows($res);

  if($count==0)
  {
  ?>
  <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
  <strong>The username and password doesn't match</strong>
  </div>    
  <?php
  }
  else
  {
    $_SESSION['login_user'] = $_POST['username'];
  ?>
  <script type="text/javascript">
  window.location="index.php";
  </script>
  <?php
  }
  }

  ?>
</div>

<footer>
  <?php  include('../assets/layout/footer.php'); ?>
</footer>

</body>
</html>


<?php
  include("connection.php");
  include("../assets/layout/navbar.php");
 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
.sec{
height: 650px; 
width: 100%;
}
.img{
height: 650px; width: 100%;
}
  
.banner{
position: absolute;
top: 100px;
left: 500px;
background-color: dodgerblue;
height: 460px;
width: 500px;
text-align: center;
color: white;
padding-top: 30px;
opacity: 1
}

  
</style>
<body>
 

<div class="sec">
<div>
  <img class="img" src="../assets/img/bookss.jpg">
</div>


<div class="books col-md-3">  



  </div>
</div>

<div class="banner">
     <form class="text-center  p-5" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <p class="h4 mb-4">Login As Student</p>
        <input type="text" name="username" class="form-control mb-4" placeholder="User-NAme">
        <input type="password" name="password"  class="form-control mb-4" placeholder="Password">
        <input class="btn btn-info btn-block my-4" type="submit" name="submit">
        <div class="d-flex justify-content-around">
        <div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label" for="">Remember me</label>
          </div>
        </div>
          <div>
                <a href="">Forgot password?</a>
            </div>
        </div>

        <p>Not a member? <br>
           <button> <a style="color: blue;" href="registration.php"> Register</a> </button>
        </p>

  </form>
</div>
<?php
  if(isset($_POST['submit']))
  {
  echo $_POST['username'];
  $count=0;
  $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
  $count=mysqli_num_rows($res);

  if($count==0)
  {
  ?>
  <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
  <strong>The username and password doesn't match</strong>
  </div>    
  <?php
  }
  else
  {
    $_SESSION['login_user'] = $_POST['username'];
  ?>
  <script type="text/javascript">
  window.location="index.php";
  </script>
  <?php
  }
  }

  ?>
</div>

<footer>
  <?php  include('../assets/layout/footer.php'); ?>
</footer>

</body>
</html>