<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png"> --}}
    <link rel="shortcut icon" href="dashboard/images/logo.png" sizes="16x16" type="image/x-icon">

    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="dashboard/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="dashboard/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="dashboard/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="dashboard/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="dashboard/css/helper.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">


        @extends('dashboard/dashboard-master')
        @section('body')

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0) /adminIndex">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>568120</h2>
                                    <p class="m-b-0">Total Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>1178</h2>
                                    <p class="m-b-0">Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>25</h2>
                                    <p class="m-b-0">Stores</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>847</h2>
                                    <p class="m-b-0">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                    <!-- column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Extra Area Chart</h4>
                                <div id="extra-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->

                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body browser">
                                <p class="f-w-600">iMacs <span class="pull-right">85%</span></p>
                                <div class="progress ">
                                    <div role="progressbar" style="width: 85%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">iBooks<span class="pull-right">90%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">iPhone<span class="pull-right">65%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Samsung<span class="pull-right">65%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">android<span class="pull-right">65%</span></p>
                                <div class="progress m-b-30">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card bg-dark">
                            <div class="testimonial-widget-one p-17">
                                <div class="testimonial-widget-one owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <img class="testimonial-author-img" src="dashboard/images/avatar/2.jpg" alt="" />
                                            <div class="testimonial-author">John</div>
                                            <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                            <div class="testimonial-text">
                                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <img class="testimonial-author-img" src="dashboard/images/avatar/3.jpg" alt="" />
                                            <div class="testimonial-author">Abraham</div>
                                            <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                            <div class="testimonial-text">
                                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <img class="testimonial-author-img" src="dashboard/images/avatar/1.jpg" alt="" />
                                            <div class="testimonial-author">Lincoln</div>
                                            <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                            <div class="testimonial-text">
                                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <img class="testimonial-author-img" src="dashboard/images/avatar/4.jpg" alt="" />
                                            <div class="testimonial-author">TYRION LANNISTER</div>
                                            <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                            <div class="testimonial-text">
                                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <img class="testimonial-author-img" src="dashboard/images/avatar/5.jpg" alt="" />
                                            <div class="testimonial-author">TYRION LANNISTER</div>
                                            <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                            <div class="testimonial-text">
                                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <img class="testimonial-author-img" src="dashboard/images/avatar/6.jpg" alt="" />
                                            <div class="testimonial-author">TYRION LANNISTER</div>
                                            <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                            <div class="testimonial-text">
                                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-title">
                                <h4>Recent Orders </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Product</th>
                                                <th>quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="dashboard/images/avatar/4.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>John Abraham</td>
                                                <td><span>iBook</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="dashboard/images/avatar/2.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>John Abraham</td>
                                                <td><span>iPhone</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="dashboard/images/avatar/3.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>John Abraham</td>
                                                <td><span>iMac</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="dashboard/images/avatar/4.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>John Abraham</td>
                                                <td><span>iBook</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-success">Done</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Message </h4>
                                    </div>
                                    <div class="recent-comment">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img alt="..." src="dashboard/images/avatar/1.jpg" class="media-object"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">john doe</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <p class="comment-date">October 21, 2018</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img alt="..." src="dashboard/images/avatar/1.jpg" class="media-object"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">john doe</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <p class="comment-date">October 21, 2018</p>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img alt="..." src="dashboard/images/avatar/1.jpg" class="media-object"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">john doe</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <p class="comment-date">October 21, 2018</p>
                                            </div>
                                        </div>

                                        <div class="media no-border">
                                            <div class="media-left">
                                                <a href="#"><img alt="..." src="dashboard/images/avatar/1.jpg" class="media-object"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Mr. Michael</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <div class="comment-date">October 21, 2018</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="year-calendar"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Todo</h4>
                                <div class="card-content">
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox"><i class="bg-primary"></i><span>Build an angular app</span>
                                                            <a href='#' class="ti-close"></a>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
                                                            <a href='#' class="ti-close"></a>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" checked><i class="bg-warning"></i><span>Follow back those who follow you</span>
                                                            <a href='#' class="ti-close"></a>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" checked><i class="bg-danger"></i><span>Design One page theme</span>
                                                            <a href='#' class="ti-close"></a>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label>
                                                            <input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
                                                            <a href='#' class="ti-close"></a>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="text" class="tdl-new form-control" placeholder="Type here">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="dashboard/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="dashboard/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="dashboard/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dashboard/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="dashboard/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
    <script src="dashboard/js/lib/morris-chart/raphael-min.js"></script>
    <script src="dashboard/js/lib/morris-chart/morris.js"></script>
    <script src="dashboard/js/lib/morris-chart/dashboard1-init.js"></script>


    <script src="dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="dashboard/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="dashboard/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="dashboard/js/lib/calendar-2/pignose.init.js"></script>

    <script src="dashboard/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="dashboard/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="dashboard/js/scripts.js"></script>
    <!-- scripit init-->

    <script src="dashboard/js/custom.min.js"></script>
    @endsection

</body>

</html>