<?php
if(isset($_POST['submit'])){
                        
                         $subscriber_name = $_POST['subscriber_name'];
    
                         $gender =  $_POST['gender'];
    
                         $subscriber_type = $_POST['subscriber_type'];
                         //$post_images = $_FILES['post_images']['name'];
                         //$post_images_tmp = $_FILES['post_images']['tmp_name'];
                         $start_time = $_POST['start_time'];
                         $end_time = $_POST['end_time'];
                         $subscriber_date = date('d-m-y');  
                         $price = $_POST['price'];
                         $payment = $_POST['payment'];
                         $weeksdays = $_POST['weeksdays'];
                         
                         


//move_uploaded_file($post_images_tmp,"../images/$post_images");
    
$query="INSERT INTO subscribers(subscriber_name,gender,subscriber_type,start_time,end_time,subscriber_date,price,payment,weeksdays)  ";
    
$query.="VALUES('{$subscriber_name}','{$gender}','{$subscriber_type}','{$start_time}','{$end_time}',now(),'{$price}','{$payment}') ";
    $result=mysqli_query($connection,$query);
    
    if(!$result){
        die(mysqli_error($connection));
    }
echo"<p class='bg-success'>subscriber added :" .""."<a href='subscribers.php'>View subscribers</a></p>";
    
}

?>
   <div class="col-xs-6">

 <form action="" method="post" enctype="multipart/form-data">
     
  
     
<div class="form-group">
   <label for="name"> Name</label>
   <input name="subscriber_name" class="form-control" type="text"/> 
</div>
     
     
      <div class="form-group">
         
     <label for="gender">Gender</label>
 
<input type="radio" name="gender" value="4" />Male
          <input type="radio" name="gender" value="3" />Female

     </div>
     
     <div class="form-group">
           <label for="subscribtion_type">Subscribtion Type</label><br/>
        <select name="Subscribtion_type" >
           <?php
            
            $query= "SELECT type_of_sub FROM subscribtion ";
                   $result =mysqli_query($connection,$query);
         
                    while($row=mysqli_fetch_assoc($result)){
                       
                         $id = $row['id'];
                         $type_of_sub = $row['type_of_sub'];
                       
                        echo "<option value=$id>'{$type_of_sub}'</option>";
                    }
            
            
      /*  
             
       if (isset($gender) && $gender=="female" && $name=="female") {
     $query= "SELECT type_of_sub FROM subscribtion";
                   $result =mysqli_query($connection,$query);
         
                    while($row=mysqli_fetch_array($result)){
                        $f_id = $row['f_id'];
                         $f_type_of_sub = $row['f_type_of_sub'];
                       echo "<option value='$f_id'>{$f_type_of_sub}</option>";
                    }
       }elseif (isset($gender) && $gender=="male" && $name=="male") {
        $query= "SELECT f_type_of_sub FROM f_subscribtion";
                   $result =mysqli_query($connection,$query);
         
                    while($row=mysqli_fetch_array($result)){
                        $id = $row['id'];
                         $type_of_sub = $row['type_of_sub'];
                       echo "<option value='$id'>{$type_of_sub}</option>";
                    }
       }
       
       */
        ?>    
       
        </select>
   
</div>
     
     
     
     
      <div class="form-group">
   <label for="hours">Start time</label>
   <input name="Start" class="form-control" type="text"/> 
</div>
     
           <div class="form-group">
   <label for="hours">End time</label>
   <input name="End" class="form-control" type="text"/> 
</div>
      
  
       
           <div class="form-group">
   <label for="Date">subscribtion date </label>
   <input name="date" class="form-control" type="date"/> 
</div>
     
              <div class="form-group">
   <label for="price">subscribtion price </label>
   <input name="price" class="form-control" type="float"/> 
</div>
     
     <div class="form-group">
   <label for="payment">payment </label>
   <input name="payment" class="form-control" type="float"/> 
</div>
     
     <div class="form-group">
         <label for="weeks_day">Week Days</label><br/>
         <input type="checkbox" name="check_list[]" value="Saturday "><label>Saturday </label><br/>
          <input type="checkbox" name="check_list[]" value="Sunday "><label>Sunday </label><br/>
          <input type="checkbox" name="check_list[]" value="Monday "><label>Monday </label><br/>
          <input type="checkbox" name="check_list[]" value="Tuesday "><label>Tuesday </label><br/>
          <input type="checkbox" name="check_list[]" value="Wednesday "><label>Wednesday </label><br/>
          <input type="checkbox" name="check_list[]" value="Thursday "><label>Thursday </label><br/>
          <input type="checkbox" name="check_list[]" value="Friday "><label>Friday </label><br/>
</div>
      
       
       
       
       
       

       
      
        <div class="form-group">
   <input name="submit" class="btn btn-primary" type="submit" value="Add new Subscriber"/> 
</div>
        
   
    
    
    
    
    
</form>
     
    </div>