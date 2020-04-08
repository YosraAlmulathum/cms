
<?php
if(isset($_GET['p_id'])){
   $f_sub_id = $_GET['p_id'];
}
                 $query= "SELECT * FROM f_subscribtions WHERE f_id = {$f_sub_id} ";
                   $result =mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $f_id = $row['f_id'];
                         $f_type_of_sub =  $row['f_type_of_sub'];
                         $f_day_sub = $row['f_day_sub'];
                         $f_month_sub = $row['f_month_sub'];
                         $f_threemonth_sub = $row['f_threemonth_sub'];
                    }


       
                if(isset($_POST['submit'])){
                            $f_type_of_sub = $_POST['f_type_of_sub'];
                            $f_day_sub = $_POST['f_day_sub'];
                            $f_month_sub = $_POST['f_month_sub'];
                            $f_threemonth_sub = $_POST['f_threemonth_sub'];
                        
    // $query="SELECT randsalt FROM users";
    //$salt_result=mysqli_query($connection,$query);
    
        $query="UPDATE f_subscribtions SET  ";
        $query.=  "f_type_of_sub= '{$f_type_of_sub}' , ";
        $query.=  "f_day_sub ='{$f_day_sub}' , ";
        $query.="f_month_sub='{$f_month_sub}',   " ;  
        
        $query.= "f_threemonth_sub ='{$f_threemonth_sub}' ";
        
        $query.= "WHERE f_id= {$f_sub_id}  ";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die(mysqli_error($connection));
    }
    echo"<p class='bg-success'>updated : <a href='../f_subs.php?f_id={$edit_id}'>view Femal subscribtions</a>or <a href='subs.php'>Edit other femal subscribtions</a></p>";

   
    }


?>

 <div class="col-xs-6">

 <form action="" method="post" enctype="multipart/form-data">
  
<div class="form-group">
   <label for="f_type_of_sub">Femal  type of subscribtions  </label>
   <input name="f_type_of_sub" class="form-control" type="text" value="<?php echo $f_type_of_sub ?>"/> 
</div>
       
       
   

       
       <div class="form-group">
   <label for="f_day_sub">Femal days subscribtions </label>
   <input name="f_day_sub" class="form-control" type="text" value="<?php echo $f_day_sub ?>"/> 
</div>
       
       <div class="form-group">
       <label for="f_month_sub">Femal month subscribtions </label>
   <input name="f_month_sub" class="form-control" type="text" value="<?php echo $f_month_sub ?>"/> 
       
       </div>
       
    
      
      <div class="form-group">
   <label for="f_threemonth_sub"> Femal three Month subscribtions </label>
   <input name="f_threemonth_sub" class="form-control" type="text"value="<?php echo $f_threemonth_sub ?>"/> 
</div>
       
       
       
       
      
        <div class="form-group">
   <input name="submit" class="btn btn-primary" type="submit" value="Edit femal subscribtion"/> 
</div>
        
   
    
    
    
    
    
</form>
     
    </div>



   
    
