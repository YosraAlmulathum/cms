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
                           
                          
                            $f_type_of_sub = $_POST['f_type_of_sub'];
                            $f_day_sub = $_POST['f_day_sub'];
                            $f_month_sub = $_POST['f_month_sub'];
                            $f_threemonth_sub = $_POST['f_threemonth_sub'];
                   
                           /* if($type_of_sub =="" || empty($type_of_sub)){
                                echo"This field should not be empty";
                                
                            }else{*/
                            
                           
                               
                                
                      $query= "INSERT INTO f_subscribtions(f_type_of_sub,f_day_sub,f_month_sub,f_threemonth_sub)
                      VALUES('{$f_type_of_sub}','{$f_day_sub}','{$f_month_sub}','{$f_threemonth_sub}') "; 
                            $result =mysqli_query($connection,$query);
                             if(!$result){
                               die(mysqli_error($connection));
                                  }
                        
                        }  ?>
                        
  
                              
                            
                          
                        <form  action="" method="post">
                        
                        <div class="form-group">
                            <label for="title">Add new Femal subscribtion</label>
                        </div>
                            
                             <div class="form-group">
                                 <label for="f_type_of_sub"> Femal type of subscribtion</label>
                                  <input class="form-control" name="f_type_of_sub" type="text"/>
                            </div>
                            
                            
                            
                            
                             <div class="form-group">
                                <label for="f_day_sub">Femal day subscribtion</label>
                                <input class="form-control" name="f_day_sub" type="text"/>
                            </div>
                            
                            <div class="form-group">
                               <label for="f_month_sub"> Femal month subscribtion </label>
                               <input class="form-control" name="f_month_sub" type="text"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="f_threemonth_sub"> Femal three month subscribtion </label>
                            <input class="form-control" name="f_threemonth_sub" type="text"/>
                            </div>
                            
                            
                           <div class="form-group">
                            
                        <input class="btn btn-primary" name="submit" type="submit" value="Add Femal subscribtion"/>  
                        </div> 
                        </form>
                        
                        
                        
                        
                        
                       
                        
                        
         
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

       