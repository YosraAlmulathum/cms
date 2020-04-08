<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>


    <!-- Navigation -->
    
    <?php  include "includes/navigate.php"; ?>
    <?php
if(isset($_POST['submit'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
   // $email=$_POST['email'];
    
    if(!empty($username) && !empty($password) && !empty($email)){
    $username=mysqli_real_escape_string($connection,$username);
    $password=mysqli_real_escape_string($connection,$password);
    //$email=mysqli_real_escape_string($connection,$email);
    
    $query="SELECT randsalt FROM users";
    $salt_result=mysqli_query($connection,$query);
    
$row=mysqli_fetch_array($salt_result);
$salt = $row['randsalt'];
$hash_password=crypt($password,$salt);
        if(!$salt_result){
            mysqli_error($connection);
        }
  
    $query="INSERT INTO users(username,user_password,user_role)  ";
    
$query.="VALUES('{$username}','{$hash_password}','user') ";
    $result=mysqli_query($connection,$query);
    
    if(!$result){
        die(mysqli_error($connection));
    }
   $message="your registeration is submitted"; 
        
}else{
        $message="fields should not be empty";
    }
}else{
    $message="";
}





?>
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                       <h6 class="text-center"><?php echo $message ;?></h6>
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
