<?php

include "includes/header.php";
include "../includes/db.php";


?>
<?php ob_start();?>
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
                            <small>Author</small>
                        </h1>
                        <?php
                        if(isset($_GET['source'])){
                            
                            $source=$_GET['source'];
                      
                        }else{
                            
                            $source='';
                        }
                        switch($source){
                                case 'add_subscribers';
                               include"includes/add_subscribers.php";
                                break;
                                
                                case 'edit_subscribers';
                               include"includes/edit_subscribers.php";
                                break;
                                
                                
                                
                            default:
                                include"includes/view_subscribers.php";
                                
                                
                        }
                            
                        
                        
                        
                        
                        ?>
      
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

       