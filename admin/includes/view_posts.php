<?php
if(isset($_POST['checkBoxArray'])){
    foreach($_POST['checkBoxArray'] as $post_values_id){
        
            $bluk_options =$_POST['bluk_options'];
        switch($bluk_options){
                
                case'puplished':
                $query="UPDATE posts SET post_statues ='{$bluk_options}' WHERE post_id={$post_values_id} ";
                $result=mysqli_query($connection,$query);
                break;
                
                case'draft':
                $query="UPDATE posts SET post_statues ='{$bluk_options}' WHERE post_id={$post_values_id} ";
                $result=mysqli_query($connection,$query);
                break;
                
                
                case'delete':
                $query="DELETE FROM posts WHERE post_id={$post_values_id} ";
                $result=mysqli_query($connection,$query);
                break;
                
                 case'clone':
                $query="SELECT * FROM posts WHERE post_id={$post_values_id} ";
                $result=mysqli_query($connection,$query);
                 while($row = mysqli_fetch_array($result)){
                         $post_id = $row['post_id'];
                         $post_category_id = $row['post_category_id'];
                         $post_title = $row['post_title'];
                         $post_author = $row['post_author'];
                         $post_images = $row['post_images'];
                         $post_date = $row['post_date'];
                         $post_content = $row['post_content'];
                         $post_tags = $row['post_tags'];
                         $post_comments_count= $row['post_comments_count'];
                         $post_status = $row['post_statues'];
                 }
$query="INSERT INTO posts(post_category_id,post_title, post_author,post_images,post_date,post_content, post_tags,post_statues)  ";
    
$query.="VALUES({$post_category_id},'{$post_title}','{$post_author}','{$post_images}',now(),'{$post_content}','{$post_tags}', '{$post_status}')  ";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die(mysqli_error($connection));
    }
                break;
               
        }
    }
    
}








?>
                          <div class="col-xs-6">

                          <form action="" method="post">
                          <div id="blukOptionContainer" class="col-xs-4">
                              <select name="bluk_options"id="" class="form-control">
                                 <option value="">select option</option>
                                 <option value="puplished">puplish</option>
                                 <option value="draft">draft</option>
                                 <option value="delete">delete</option>
                                 <option value="clone">clone</option>
                              
                                  
                              </select>
                              </div>
                              
                              
                              <div class="col-xs-4 form-input">
                                  <input type="submit" name="submit" value="apply" class="btn btn-success">
                                  <a class="btn btn-primary" href="posts.php?source=add_posts">add new</a>
                                   
                                  
                              </div>
                              
                              
                          
                          
                   <table class="table table-bordered table-hover">
                   <thead>
                       <tr>
                            <th><input id="selectAllBoxes" type="checkbox" name="checkbox"></th>
                             <th>id</th>
                             <th>category</th>
                             <th>title</th>
                             <th>author</th>
                             <th>images</th>
                             <th>date</th>
                             <th>content</th>
                            <th>tags</th>   
                            <th>comments</th>
                            <th>status</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Delete</th>
                                      
                                       
                                           
                                         
                       </tr>
                       
                   </thead>
                   <tbody>
                     <?php ob_start()?>
                      <?php
                       
                        $query= "SELECT * FROM posts ";
                   $result =mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                         $post_id = $row['post_id'];
                         $post_category_id = $row['post_category_id'];
                         $post_title = $row['post_title'];
                         $post_author = $row['post_author'];
                         $post_images = $row['post_images'];
                        $post_date = $row['post_date'];
                         $post_content = $row['post_content'];
                         $post_tags = $row['post_tags'];
                         $post_comments_count= $row['post_comments_count'];
                         $post_status = $row['post_statues'];
                        $post_view_count = $row['post_view_count'];
                        // $name_title = $row['title'];
                        echo "<tr>";
                            ?>
                            <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="<?php echo $post_id ;?>" ></td>
                    <?php
          
                           echo "<td>$post_id</td>";
                    
                 
                 
                       /*  $query= "SELECT * FROM categories WHERE id = $post_category_id ";
                   $result =mysqli_query($connection,$query);
               while($row=mysqli_fetch_assoc($result)){
                        //$post_category_id = $row['id'];
                         $name_title = $row['title'];
                       echo "<td>{$name_title}</td>";
                    }*/
                   
        
          
            
        echo "<td>$post_category_id</td>";
        
            
                         
                        
                           echo "<td>$post_title</td>";
                           echo "<td>$post_author </td>";
                           echo "<td><img src='../images/$post_images' width=100 alt='image'></td>";
                         echo "<td>$post_date</td>";
                           echo "<td>$post_content</td>";
                           echo "<td>$post_tags</td>";
                           echo "<td>$post_comments_count</td>";
                           echo "<td>$post_status</td>";
                        echo "<td><a href ='posts.php?source=edit_post&p_id={$post_id}'>Edit</td>";
                        echo "<td><a href ='../post.php?p_id={$post_id}'>View post</td>";
                        echo "<td><a onClick=\" javascript: return confirm('are you sure you want to delete'); \" href ='posts.php?delete={$post_id}'>Delete</td>";
                        echo"<td><a href='posts.php?reset{$post_id}'>{$post_view_count}</a></td>";
                        echo "</tr>";  
                    }
                       
                       if(isset($_GET['delete'])){
                          $del_post_id =$_GET['delete'];
                           $query="DELETE FROM posts WHERE post_id ={$del_post_id}";
                           $result=mysqli_query($connection,$query);
                           header("Location:posts.php"); //same sourse page
                           //if(!$result){
                              // die('query faild'.mysqli_error($connection));
                           }
                       
                       
                         if(isset($_GET['reset'])){
                          $reset_post_id =$_GET['reset'];
                           $query="UPDATE posts SET post_view_count = 0 WHERE post_id ={$reset_post_id} ";
                           $result=mysqli_query($connection,$query);
                           header("Location:posts.php"); //same sourse page
                           if(!$result){
                               die('query faild'.mysqli_error($connection));
                           }
                           
                         }
                     
                       
                       
                       
                       ?>
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                       <!--<tr>
                           <td>9</td>
                           <td>yosra</td>
                            <td>php course</td>
                             <td>image</td>
                              <td>comment</td>
                               <td>status</td>
                                <td>php</td>
                                 <td>tags</td>
                                  <td>date</td>
                                  <td></td>
                       </tr>-->
                       
                   </tbody>
                    </table>
                        
                         
                      </form>   
                         
                         
                        
                       
                        
                        
                        
                       
                        
                        
                        
                      
                        
                    </div>