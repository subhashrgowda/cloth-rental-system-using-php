<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login (2).php");
    exit;
}
?>
<div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <img class="img-fluid main-logo" src="assets/images/logo/favicon.png" alt="logo">
                           <!-- <img class="img-fluid white-logo" src="assets/images/logo/logo-white.png" alt="logo">-->
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    </div>
                </div>

                <form class="form-inline search-full col" action="javascript:void(0)" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Voxo .." name="q" title="" autofocus>
                                <i class="close-search" data-feather="x"></i>
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>

                <div class="nav-right col-4 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <span class="header-search">
                                <span class="lnr lnr-magnifier"></span>
                            </span>
                        </li>
                        
                        <li>
                            <div class="mode">
                                <span class="lnr lnr-moon"></span>
                            </div>
                        </li>

                        
                        <li class="maximize">
                            <a class="text-dark" href="javascript:void(0)" onclick="javascript:toggleFullScreen()">
                                <span class="lnr lnr-frame-expand"></span>
                            </a>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="assets/images/users/4.jpg" alt="">
                                <div class="user-name-hide media-body">
                                <h4 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
                                    <p class="mb-0 font-roboto">Admin<i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="all-users.php">
                                        <i data-feather="users"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="order-list.php">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>
                                
                                                <li>                                                   
                                                    <a href="login (2).php" class="btn btn-danger ml-3" class="d-block">Login</a>                                                    
                                                </li>
                                                <li>                                                   
                                                    <a href="register.php" class="btn btn-danger ml-3" class="d-block">Register</a>
                                                </li>
                                                <li>
                                                <a href="reset-password.php" class="btn btn-danger ml-3">Reset Your Password</a>
                                                    </li>
                                                    <li>
                                                        <a href="logout (2).php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
                                            
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>