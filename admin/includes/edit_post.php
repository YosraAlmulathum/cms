<?php
if(isset($_GET['p_id'])){
   $edit_by_id = $_GET['p_id'];
}
                        $query= "SELECT * FROM posts WHERE post_id=$edit_by_id ";
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
                       
                        }
    if(isset($_POST['submit'])){
                        $post_category_id = $_POST['post_category_id'];
                         $post_title = $_POST['post_title'];
                         $post_author = $_POST['post_author'];
                         $post_images = $_FILES['post_images']['name'];
                         $post_images_tmp = $_FILES['post_images']['tmp_name'];
                         $post_date = date('d-m-y');
                         $post_content = $_POST['post_content'];
                         $post_tags = $_POST['post_tags'];
                         $post_comments_count = 3;
                         $post_status = $_POST['post_statues'];
                         


move_uploaded_file($post_images_tmp,"../images/$post_images");
     /*if(empty($post_images)){
                            
                        $query="SELECT * FROM posts WHERE post_id = $edit_by_id  ";
                            $result=mysqli_query($connection,$query);
                       

                            while($row=mysqli_fetch_array($result)){
                                $post_images =$row['post_images'];
                            }
     }*/
    
        $query="UPDATE posts SET  ";
        $query.=  "post_category_id= '{$post_category_id}' , ";
        $query.=  "post_title ='{$post_title}' , ";
        $query.="post_author='{$post_author}',   " ;  
        //$query.= "post_images='{$post_images}',  ";
        $query.= "post_date=now(),  ";
        $query.= " post_content ='{$post_content}',  ";
        $query.="post_tags='{$post_tags}',  ";
        $query.= "post_statues='{$post_status}'  "; 
        $query.= "WHERE post_id ={$edit_by_id}  ";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die(mysqli_error($connection));
    }
    echo"<p class='bg-success'>updated : <a href='../post.php?p_id={$edit_by_id}'>view post</a>or <a href='posts.php'>Edit other posts</a></p>";

    }


?>

 <div class="col-xs-6">

 <form action="" method="post" enctype="multipart/form-data">
  
<div class="form-group">
   <label for="title">post title </label>
   <input name="post_title" class="form-control" type="text" value="<?php echo"$post_title"  ?>"/> 
</div>
       
       <div class="form-group">
       <select name="post_category_id" id="">     
       <?php 
             $query= "SELECT * FROM categories";
                   $result =mysqli_query($connection,$query);
         
                    while($row=mysqli_fetch_assoc($result)){
                        $id_title = $row['id'];
                         $name_title = $row['title'];
                       echo "<option value='$id_title'>{$name_title}</option>";
                    }
          
            
        ?>
        </select>
          </div>
   <!--<label for="ipost_category_id">post_category_id </label>
   <input name="post_category_id" class="form-control" type="number_format" --> 
   

       
       <div class="form-group">
   <label for="author">post author </label>
   <input name="post_author" class="form-control" type="text" value="<?php echo $post_author  ?>"/> 
</div>
       
       <div class="form-group">
       <select name="post_statues" id="">
           <option value="<?php echo $post_status ;  ?>"> <?php echo $post_status ;  ?></option>
           <?php
           if($post_status == 'draft'){
               echo "<option value='puplished'>puplish</option>";
           }else{
               echo "<option value='draft'>Draft</option>";
           }
           
           
           ?>
          
           
           
           
       </select>
       
       </div>
       
       
       
   

       
       <div class="form-group">
   <label for="images">post images </label>
   <input name="post_images"  type="file" scr="../images/<?php  echo $post_images ?>"/> 
</div>
      
      <div class="form-group">
   <label for="date">post date </label>
   <input name="post_date" class="form-control" type="date_format"value="<?php echo $post_date  ?>"/> 
</div>
       <div class="form-group">
   <label for="tags">post tags </label>
   <input name="post_tags" class="form-control" type="text"value="<?php echo $post_tags  ?>"/> 
</div>
       
       <div class="form-group">
   <label for="content">post content </label>
   <textarea name="post_content" class="form-control" type="text" cols=20 rows=10 >
       <?php echo $post_content ?>
       
   </textarea> 
</div>
       
      
        <div class="form-group">
   <input name="submit" class="btn btn-primary" type="submit" value="publish post"/> 
</div>
        
   
    
    
    
    
    
</form>
     
    </div>