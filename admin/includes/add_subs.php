<?php

include "includes/header.php";
//include "../includes/db.php";


?>

   

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
                          <?php
                        if(isset($_POST['submit'])){
                           
                          
                            $type_of_sub = $_POST['type_of_sub'];
                            $day_sub = $_POST['day_sub'];
                            $month_sub_12 = $_POST['month_sub_12'];
                            $month_sub_16 = $_POST['month_sub_16'];
                            $month_sub_20 = $_POST['month_sub_20'];
                            $month_sub_24 = $_POST['month_sub_24'];
                            $threemonth_sub = $_POST['threemonth_sub'];
                   
                           /* if($type_of_sub =="" || empty($type_of_sub)){
                                echo"This field should not be empty";
                                
                            }else{*/
                            
                           
                               
                                
                      $query= "INSERT INTO subscribtions(type_of_sub,day_sub,month_sub_12,month_sub_16,month_sub_20,month_sub_24,threemonth_sub)
            VALUES('{$type_of_sub}','{$day_sub}','{$month_sub_12}','{$month_sub_16}','{$month_sub_20}','{$month_sub_24}','{$threemonth_sub}') "; 
                            $result =mysqli_query($connection,$query);
                             if(!$result){
                               die(mysqli_error($connection));
                                  }
                        
                        }  ?>
                        
  
                              
                            
                          
                        <form  action="" method="post">
                        
                        <div class="form-group">
                            <label for="title">Add new subscribtion</label>
                        </div>
                            
                             <div class="form-group">
                                 <label for="type_of_sub">Type of subscribtion</label>
                                  <input class="form-control" name="type_of_sub" type="text"/>
                            </div>
                            
                            
                            
                            
                             <div class="form-group">
                                <label for="day_sub">Day subscribtion</label>
                                <input class="form-control" name="day_sub" type="text"/>
                            </div>
                            
                            <div class="form-group">
                               <label for="month_sub_12">Month subscribtion(12 Exersises) </label>
                               <input class="form-control" name="month_sub_12" type="text" />
                            </div>
                             <div class="form-group">
                               <label for="month_sub_16">Month subscribtion(16 Exersises) </label>
                               <input class="form-control" name="month_sub_16" type="text"/>
                            </div>
                             <div class="form-group">
                               <label for="month_sub_20">Month subscribtion (20 Exersises) </label>
                               <input class="form-control" name="month_sub_20" type="text"/>
                            </div>
                             <div class="form-group">
                               <label for="month_sub_24">Month subscribtion(24 Exersises) </label>
                               <input class="form-control" name="month_sub_24" type="text"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="threemonth_sub">Three month subscribtion </label>
                            <input class="form-control" name="threemonth_sub" type="text"/>
                            </div>
                            
                            
                           <div class="form-group">
                            
                        <input class="btn btn-primary" name="submit" type="submit" value="Add subscribtion"/>  
                        </div> 
                        </form>
                        
                        
                        
                        
                        
                       
                        
                        
         
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

       