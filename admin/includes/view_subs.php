
                          <div class="col-xs-6">
                   <table class="table table-borderd table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type of subscribtion</th>
                                <th>Day subscribtion</th>
                                <th>Month subscribtion</th>
                                <th>Three Month subscribtion</th>
                            </tr>
                        </thead>
                        
                        
                    <tbody>
                        
                     <?php ob_start()?>
                      <?php
                   $query= "SELECT * FROM subscribtions";
                   $result =mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                         $type_of_sub = $row['type_of_sub'];
                         $day_sub = $row['day_sub'];
                         $month_sub = $row['month_sub'];
                         $threemonth_sub = $row['threemonth_sub'];
                        echo"<tr>";
                        echo"<td>{$id}</td>";
                        echo"<td>{$type_of_sub}</td>";
                        echo"<td>{$day_sub}</td>";
                        echo"<td>{$month_sub}</td>";
                        echo"<td>{$threemonth_sub}</td>";
                        
                        echo "<td><a href ='subs.php?delete={$id}'>Delete</td>";
                          //echo "<td><a href ='cat_edit.php?edit={$id}'>Edit</td>";
                        echo "<td><a href ='subs.php?source=edit_subs&p_id={$id}'>Edit</td>";
                        
                         
                         echo"</tr>";
                    }
                   ?>
                  <?php
                          if(isset($_GET['delete'])){
                          $del_id =$_GET['delete'];
                          $query= "DELETE FROM subscribtions WHERE id = {$del_id} ";
                          $result =mysqli_query($connection,$query);
                        header("Location:subs.php");
                          
                      }  
                        
                        
                        
                        ?>
                    </tbody>
                    </table>
                       
                        
              
                      
                      
                      
    
                        
                       
                        
                        
                        
                       
                        
                        
                        
                      
                        
                    </div>