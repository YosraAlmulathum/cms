
                          <div class="col-xs-6">
                   <table class="table table-borderd table-hover">
                        <thead>
                            <tr>
                                <th> Femal ID</th>
                                <th> Femal type of subscribtion</th>
                                <th> Femal day subscribtion</th>
                                <th> Femal month subscribtion</th>
                                <th> Femal three month subscribtion</th>
                            </tr>
                        </thead>
                        
                        
                    <tbody>
                        
                     <?php ob_start()?>
                      <?php
                   $query= "SELECT * FROM f_subscribtions";
                   $result =mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($result)){
                        $f_id = $row['f_id'];
                         $f_type_of_sub = $row['f_type_of_sub'];
                         $f_day_sub = $row['f_day_sub'];
                         $f_month_sub = $row['f_month_sub'];
                         $f_threemonth_sub = $row['f_threemonth_sub'];
                        echo"<tr>";
                        echo"<td>{$f_id}</td>";
                        echo"<td>{$f_type_of_sub}</td>";
                        echo"<td>{$f_day_sub}</td>";
                        echo"<td>{$f_month_sub}</td>";
                        echo"<td>{$f_threemonth_sub}</td>";
                        
                        echo "<td><a href ='f_subs.php?delete={$f_id}'>Delete</td>";
                          //echo "<td><a href ='cat_edit.php?edit={$id}'>Edit</td>";
                        echo "<td><a href ='f_subs.php?source=f_edit_subs&p_id={$f_id}'>Edit</td>";
                        
                         
                         echo"</tr>";
                    }
                   ?>
                  <?php
                          if(isset($_GET['delete'])){
                          $f_del_id =$_GET['delete'];
                          $query= "DELETE FROM f_subscribtions WHERE f_id = {$f_del_id} ";
                          $result =mysqli_query($connection,$query);
                        header("Location:f_subs.php");
                          
                      }  
                        
                        
                        
                        ?>
                    </tbody>
                    </table>
                       
                        
              
                      
                      
                      
    
                        
                       
                        
                        
                        
                       
                        
                        
                        
                      
                        
                    </div>