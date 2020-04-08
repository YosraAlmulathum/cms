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
                                case 'f_add_subs';
                               include"includes/f_add_subs.php";
                                break;
                                
                                case 'f_edit_subs';
                               include"includes/f_edit_subs.php";
                                break;
                                
                                
                                
                            default:
                                include"includes/f_view_subs.php";
                                
                                
                        }
                            
                        
                        
                        
                        
                        ?>
      
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

       