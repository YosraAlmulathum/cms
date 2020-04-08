
<?php
if(isset($_GET['p_id'])){
   $sub_id = $_GET['p_id'];
}
                 $query= "SELECT * FROM subscribtions WHERE id = {$sub_id} ";
                   $result =mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                         $type_of_sub =  $row['type_of_sub'];
                         $day_sub = $row['day_sub'];
                         $month_sub = $row['month_sub'];
                         $threemonth_sub = $row['threemonth_sub'];
                    }


       
                if(isset($_POST['submit'])){
                            $type_of_sub = $_POST['type_of_sub'];
                            $day_sub = $_POST['day_sub'];
                            $month_sub = $_POST['month_sub'];
                            $threemonth_sub = $_POST['threemonth_sub'];
                        
    // $query="SELECT randsalt FROM users";
    //$salt_result=mysqli_query($connection,$query);
    
        $query="UPDATE subscribtions SET  ";
        $query.=  "type_of_sub= '{$type_of_sub}' , ";
        $query.=  "day_sub ='{$day_sub}' , ";
        $query.="month_sub='{$month_sub}',   " ;  
        
        $query.= "threemonth_sub ='{$threemonth_sub}' ";
        
        $query.= "WHERE id= {$sub_id}  ";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die(mysqli_error($connection));
    }
    echo"<p class='bg-success'>updated : <a href='../subs.php?id={$edit_id}'>view subscribtions</a>or <a href='subs.php'>Edit other subscribtions</a></p>";

   
    }


?>

 <div class="col-xs-6">

 <form action="" method="post" enctype="multipart/form-data">
  
<div class="form-group">
   <label for="type_of_sub">Type of subscribtions  </label>
   <input name="type_of_sub" class="form-control" type="text" value="<?php echo $type_of_sub ?>"/> 
</div>
       
       
   

       
       <div class="form-group">
   <label for="day_sub">Days subscribtions </label>
   <input name="day_sub" class="form-control" type="text" value="<?php echo $day_sub ?>"/> 
</div>
       
       <div class="form-group">
       <label for="month_sub">Month subscribtions </label>
   <input name="month_sub" class="form-control" type="text" value="<?php echo $month_sub ?>"/> 
       
       </div>
       
    
      
      <div class="form-group">
   <label for="threemonth_sub">Three Month subscribtions </label>
   <input name="threemonth_sub" class="form-control" type="text"value="<?php echo $threemonth_sub ?>"/> 
</div>
       
       
       
       
      
        <div class="form-group">
   <input name="submit" class="btn btn-primary" type="submit" value="Edit subscribtion"/> 
</div>
        
   
    
    
    
    
    
</form>
     
    </div>



   
    
