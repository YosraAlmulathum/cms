<?php

include "includes/header.php";
include "../includes/db.php";


?>
<?php ob_start();?>
   <?php
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    

$query="SELECT * FROM users WHERE username='{$username}' ";
$result=mysqli_query($connection,$query);

while($row=mysqli_fetch_array($result)){
                        $user_id = $row['user_id'];
                         $username = $row['username'];
                         $user_password = $row['user_password'];
                         $user_firstname = $row['user_firstname'];
                         $user_lastname = $row['user_lastname'];
                        
                         
                         $user_role = $row['user_role'];
}
}
?>
<?php
if(isset($_POST['submit'])){
   
                        
                         $user_firstname = $_POST['user_firstname'];
                         $user_lastname = $_POST['user_lastname'];
                         $user_role = $_POST['user_role'];
                         //$post_images = $_FILES['post_images']['name'];
                         //$post_images_tmp = $_FILES['post_images']['tmp_name'];
                         $username = $_POST['username'];
                         
                         $user_password = $_POST['user_password'];
                         //$post_date = date('d-m-y');
                         


//move_uploaded_file($post_images_tmp,"../images/$post_images");
    
        $query="UPDATE users SET  ";
        $query.=  "user_firstname = '{$user_firstname}' , ";
        $query.=  "user_lastname ='{$user_lastname}', ";
        $query.=  "user_role='{$user_role}', ";       
        $query.=  "username = '{$username}',  ";
      
        $query.=  "user_password='{$user_password}'  ";
        $query.=  "WHERE username ='{$username}'";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die(mysqli_error($connection));
    }
    

    }



?>
    <div id="wrapper">

       <?php
        include"includes/navigation.php";
        
        ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Welcome to Admin
                            <small>Author</small>
                        </h1>
                         <div class="col-xs-6">

 <form action="" method="post" enctype="multipart/form-data">
  
<div class="form-group">
   <label for="firstname">first name </label>
   <input name="user_firstname" class="form-control" type="text" value="<?php echo $user_firstname ?>"/> 
</div>
      
      <div class="form-group">
   <label for="lastname">last name </label>
   <input name="user_lastname" class="form-control" type="text"value="<?php echo $user_lastname ?>"/> 
</div>
      
  
       <div class="form-group">
        <select name="user_role" id="">
         <option value="user"><?php echo $user_role ?></option> 
         
        <?php
            if($user_role == 'admin'){
                 echo "<option value='user'>user</option>";
            }else{
                
                 echo "<option value='admin'>admin</option>";
            }
            
            ?>    
       
        </select>
   
</div>
           <div class="form-group">
   <label for="username">username </label>
   <input name="username" class="form-control" type="text"value="<?php echo $username ?>"/> 
</div>
      
       
       
       
       
       

      
      <div class="form-group">
   <label for="password">password </label>
   <input name="user_password" class="form-control" type="password" value="<?php echo $user_password ?>"/> 
</div>
      
       
      
        <div class="form-group">
   <input name="submit" class="btn btn-primary" type="submit" value="Update profile"/> 
</div>
        
   
    
    
    
    
    
</form>
     
    </div>
                        
                        
                        
      
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

       