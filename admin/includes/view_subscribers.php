
                          <div class="col-xs-4">
                              

                    <h4> Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit"> 
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                     
                    </div>
                     </form>
                  
                <input name="submit" class="btn btn-primary" type="submit" value="Create Report"/>
                </div>
                   <table class="table table-bordered table-hover">
                   <thead>
                       <tr>
                             <th>ID</th>
                             <th>subscriber name</th>
                             <th>gender</th>
                             <th>subscriber type</th>
                             <th>start_time</th>
                             <th>end_time</th>
                             <th>subscriber_date</th>
                             <th>price</th>
                             <th>payment</th>
                             <th>weeksdays</th>
                           <th>Remanent</th>
                           <th>subscribers_status</th>
                            <th>Attended</th>
                            <th>Absence</th>
                           <th>Avaliable Excercises</th>
                           <th>Delete</th>
                           <th>Resubscribtion</th>
                           
                            
                                      
                                       
                                           
                                         
                       </tr>
                       
                   </thead>
                   <tbody>
                    
                      <?php
                       
                        $query= "SELECT * FROM subscribers ";
                        $result = mysqli_query($connection,$query);
                       if(!$result){
                           die(mysqli_error($connection));
                       }
                    while($row = mysqli_fetch_assoc($result)){
                         $subscriber_id = $row['subscriber_id'];
                         $subscriber_name = $row['subscriber_name'];
                         $gender = $row['gender'];
                         $subscriber_type = $row['subscriber_type'];
                         $start_time = $row['start_time'];
                         $end_time = $row['end_time'];
                         $subscriber_date = $row['subscriber_date'];  
                         $price = $row['price'];
                         $payment = $row['payment'];
                         $weeksdays = $row['weeksdays'];
                        
                        $Remanent = ($row['price']-$row['payment']);
                        
                        $subscribers_statues = $row['subscribers_statues'];
                        $avaliable_excercises = $row['avaliable_excercises'];
                         
                        echo "<tr>";
                         echo "<td>$subscriber_id</td>";
                         echo "<td>$subscriber_name</td>";
                         echo "<td>$gender</td>";
                        echo "<td>$subscriber_type</td>";
                        echo "<td>$start_time</td>";
                        echo "<td>$end_time</td>";
                        echo "<td>$subscriber_date</td>";
                        echo "<td>$price</td>";
                        echo "<td>$payment</td>";
                        echo "<td>$weeksdays</td>";
                        echo "<td>$Remanent</td>";
                         echo "<td>$subscribers_statues</td>";
                        
                        
                 
/*$query="SELECT * FROM posts WHERE post_id =$comment_post_id ";
                        $post_result=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($post_result)){
                            $post_id=$row['post_id'];
                            $post_title=$row['post_title'];
                          echo "<td><a href='../post.php?p_id=$post_id'</a>$post_title</td>";
                            
                        */
                       echo "<td><a href ='subscribers.php?Attended=$subscriber_id'>Attended</td>";
                        echo "<td><a href ='subscribers.php?Absence=$subscriber_id'>Absence</td>";
                        echo "<td>$avaliable_excercises</td>";
                        echo "<td><a onClick=\" javascript: return confirm('are you sure you want to delete'); \" href ='subscribers.php?delete=$subscriber_id'>Delete</td>";
                        echo "<td><a href ='subscribers.php?source=add_subscribers&p_id=$subscriber_id'>Resubscribtion</td>";
                       
                        echo "</tr>";  
                        
                     } 
                       ?>
                      
        
                   </tbody>
                    </table>
                      <?php
                              
                              if(isset($_GET['Attended'])){
                          $Attended_sub_id =$_GET['Attended'];
                           $query="UPDATE subscribers SET subscribers_statues ='Attended' WHERE subscriber_id ={$Attended_sub_id}  ";
                           $result=mysqli_query($connection,$query);
                           header("Location:subscribers.php"); //same sourse page
                           if(!$result){
                               die('query faild'.mysqli_error($connection));
                           }
                           
                           
                     }
                                if(isset($_GET['Absence'])){
                          $Absence_sub_id =$_GET['Absence'];
                           $query="UPDATE subscribers SET subscribers_statues ='Absence' WHERE subscriber_id ={$Absence_sub_id}  ";
                           $result=mysqli_query($connection,$query);
                           header("Location:subscribers.php"); //same sourse page
                           if(!$result){
                               die('query faild'.mysqli_error($connection));
                           }
                           
                           
                     }
                              
                              
                              
                       if(isset($_GET['delete'])){
                          $del_sub_id =$_GET['delete'];
                           $query="DELETE FROM subscribers WHERE subscriber_id ={$del_sub_id}";
                           $result=mysqli_query($connection,$query);
                           header("Location:subscribers.php"); //same sourse page
                           if(!$result){
                               die('query faild'.mysqli_error($connection));
                           }
                           
                           
                     }
                       
                       ?>
                    </div>