<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:30:35 GMT -->
<head>
<meta charset="utf-8">
<title>RightPlace.lk | My Property</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/blue-theme.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
.list-group{
	border-radius: 0px
}
.sub-list-group{
	margin: 10px;
	
}
.list-group-item{

}
.list-group-item:hover , .list-group-item:active{
	border-left: 3px solid #0074D9;
}
.act{
	border-left: 3px solid #0074D9;
}

</style>
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header">
        <div class="main-box clearfix">
        	<!-- Logo Box -->
            <div class="logo-box">
                <div class="logo"><a href="/"><img src="images/ed-logo.png" alt="" title=""></a></div>
            </div>

            <!-- Upper Right-->
            <div class="upper-right">
                <ul class="clearfix">
                    <li class="dropdown option-box">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="images/resource/thumb-1.jpg" alt="avatar" class="thumb">My Account</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="dashboard.html">My Account</a>
                            <a class="dropdown-item" href="/dashboard/my-add">My ads</a>
                         
                            <a class="dropdown-item" href="../index-2.html">Logout</a>
                        </div>
                    </li>
                    <li class="submit-property">
                    	<a href="submit-property.html" class="theme-btn btn-style-one">Submit Property <i class="pe-7s-up-arrow"></i></a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <!--End Header Lower-->
    </header>
    
    @yield('content')
 
    <script src="js/jquery.js"></script> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#js-example-basic-single').select2();
    });
    $('#popoverData').popover();
    $('#popoverData1').popover();
    </script>
    </body>
    
    <!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:31:39 GMT -->
    </html>