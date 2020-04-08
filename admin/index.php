<?php

include "includes/header.php";
include "../includes/db.php";
?>

    <div id="wrapper">

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
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                        
                    </div>
                </div>
                  <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
     <?php
        $query="SELECT * FROM posts";
        $post_result=mysqli_query($connection,$query);
        $post_counts=mysqli_num_rows($post_result);
         echo "<div class='huge'>{$post_counts}</div>";
        
        
        
        ?>
                  
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                     <?php
        $query="SELECT * FROM comments";
        $comments_result=mysqli_query($connection,$query);
        $comments_counts=mysqli_num_rows($comments_result);
         echo "<div class='huge'>{$comments_counts}</div>";
        
        
        
        ?>
                     
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                     <?php
        $query="SELECT * FROM users";
        $users_result=mysqli_query($connection,$query);
        $users_counts=mysqli_num_rows($users_result);
         echo "<div class='huge'>{$users_counts}</div>";
        
        
        
        ?>
                   
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
       
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
        $query="SELECT * FROM categories";
        $category_result=mysqli_query($connection,$query);
        $category_counts=mysqli_num_rows($category_result);
         echo "<div class='huge'>{$category_counts}</div>";
        
        
        
        ?>
                        
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="category.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                <!-- /.row -->
                <?php
       
        $query="SELECT * FROM posts WHERE post_statues ='puplished' ";
        $puplished_result=mysqli_query($connection,$query);
        $post_puplished_counts=mysqli_num_rows($puplished_result);
                
        $query="SELECT * FROM posts WHERE post_statues ='draft' ";
        $draft_result=mysqli_query($connection,$query);
        $post_draft_counts=mysqli_num_rows($draft_result);
                
                
                
        $query="SELECT * FROM comments WHERE comment_statues='unapproved' ";
        $unpproved_result=mysqli_query($connection,$query);
        $comments_unpproved_counts=mysqli_num_rows($unpproved_result);
                
                
        $query="SELECT * FROM users WHERE user_role='admin' ";
        $users_result=mysqli_query($connection,$query);
        $users_role_counts=mysqli_num_rows($users_result);
            
                
       
                
                ?>
<div class="row">

    <script type="text/javascript">
      google.charts.load("visualization", "1.1",{'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Data', 'Count'],
        //    ['2014', 1000],
            <?php
            $element_text=['all posts','post_puplished','draft posts','comments','comments unpproved','users','users admin','category'];
             $element_count=[$post_counts,$post_puplished_counts,$post_draft_counts,$comments_counts,$comments_unpproved_counts,$users_counts,$users_role_counts,$category_counts];
            for($i=0; $i<8; $i++){
                 echo"['{$element_text[$i]}'" ."," ."{$element_count[$i]}] ,";
            }
           
            ?>
         
          
        
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data,options);
      }
    </script>
    <div id="columnchart_material" style="width: auto; height: 400px;"></div>
</div>


            </div>
            <!-- /.container-fluid -->

       