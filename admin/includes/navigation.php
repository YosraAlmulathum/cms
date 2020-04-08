 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                 
                 <li><a href="../index.php">Login page</a></li>
                
                   
                   
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                    
                    <?php
                        if(isset($_SESSION['username'])){
                        echo $_SESSION['username'];
                        }
                        
                        ?>
                   
                    
                    
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Subscribers <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="">
                            <li>
                                <a href="./subscribers.php">View </a>
                            </li>
                            <li>
                                <a href="subscribers.php?source=add_subscribers">add </a>
                            </li>
                        </ul>
                    </li>
                     <!--<li class="">
                        <a href="subscribers.php"><i class="fa fa-fw fa-file"></i>Subscribers</a>
                    </li>-->
                    
                     <li>
                        <a href="javascript:;" data-toggle="" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Males Subscribtions <i class="fa fa-fw "></i></a>
                        <ul id="demo" class="">
                            <li>
                                <a href="subs.php">View </a>
                            </li>
                            <li>
                                <a href="subs.php?source=add_subs">add </a>
                            </li>
                           
                        </ul>
                    </li>
                    
                    
                     <li>
                        <a href="javascript:;" data-toggle="" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Femals Subscribtions <i class="fa fa-fw "></i></a>
                        <ul id="demo" class="">
                            <li>
                                <a href="f_subs.php">View </a>
                            </li>
                            <li>
                                <a href="f_subs.php?source=f_add_subs">add </a>
                            </li>
                            
                        </ul>
                    </li>
                 
                    
                    
                   
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <html>
        
  <head>
  