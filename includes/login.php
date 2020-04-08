<?php include"db.php"?>
<?php session_start();?>
<?php
if(isset($_POST['submit'])){
$username= $_POST['username'];
$password= $_POST['password'];
//$user_role= $_POST['user_role'];
    
   $username= mysqli_real_escape_string($connection,$username);
   $password= mysqli_real_escape_string($connection,$password);
   // $user_role= mysqli_real_escape_string($connection,$user_role);
    
    $query="SELECT * FROM users WHERE username='{$username}' ";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die(mysqli_error($connection));
    }
    while($row=mysqli_fetch_array($result)){
        $db_user_id=$row['user_id'];
        $db_username=$row['username'];
        $db_user_role=$row['user_role'];
        $db_user_firstname=$row['user_firstname'];
        $db_user_lastname=$row['user_lastname'];
        $db_user_password=$row['user_password'];
    }
    // $password=crypt($password,$db_user_password);  //use db_pass to login
  
    if($username == $db_username && $password == $db_user_password && $db_user_role =='admin'){
        $_SESSION['username']=$db_username;
        $_SESSION['user_firstname']=$db_user_firstname;
        $_SESSION['user_lastname']=$db_user_lastname;
        $_SESSION['user_password']=$db_user_password;
        $_SESSION['user_role']=$db_user_role;
        
        header("Location:../admin");
        
    }else{
       header("Location:../user");  
    }
    
    
    
    
    }

    





?>