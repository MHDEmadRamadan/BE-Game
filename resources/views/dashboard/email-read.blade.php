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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-content">
                                    <!-- Left sidebar -->
                                    <div class="inbox-leftbar">

                                        <a href="app-email-compose.html" class="btn btn-danger btn-block waves-effect waves-light">Compose</a>

                                        <div class="mail-list mt-4">
                                            <a href="#" class="list-group-item border-0 text-danger"><i class="mdi mdi-inbox font-18 align-middle mr-2"></i><b>Inbox</b><span class="label label-danger float-right ml-2">8</span></a>
                                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-star font-18 align-middle mr-2"></i>Starred</a>
                                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Draft<span class="label label-info float-right ml-2">32</span></a>
                                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-send font-18 align-middle mr-2"></i>Sent Mail</a>
                                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-delete font-18 align-middle mr-2"></i>Trash</a>
                                        </div>

                                        <h6 class="mt-5 m-b-15">Labels</h6>

                                        <div class="list-group b-0 mail-list">
                                            <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-info mr-2"></span>Web App</a>
                                            <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-warning mr-2"></span>Project 1</a>
                                            <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-purple mr-2"></span>Project 2</a>
                                            <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-pink mr-2"></span>Friends</a>
                                            <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-success mr-2"></span>Family</a>
                                        </div>

                                    </div>
                                    <!-- End Left sidebar -->
                                    <div class="inbox-rightbar">

                                        <div class="m-t-10 m-b-20" role="toolbar">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light waves-effect"><i class="mdi mdi-archive font-18 vertical-middle"></i></button>
                                                <button type="button" class="btn btn-light waves-effect"><i class="mdi mdi-alert-octagon font-18 vertical-middle"></i></button>
                                                <button type="button" class="btn btn-light waves-effect"><i class="mdi mdi-delete-variant font-18 vertical-middle"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-folder font-18 vertical-middle"></i>
                                                    <b class="caret m-l-5"></b>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">Move to</span>
                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-label font-18 vertical-middle"></i>
                                                    <b class="caret m-l-5"></b>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">Label as:</span>
                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                </div>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                                    More
                                                    <span class="caret m-l-5"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">More Option :</span>
                                                    <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <h5>Hi Bro, How are you?</h5>

                                            <hr />

                                            <div class="media mb-4 mt-1">
                                                <img class="d-flex mr-3 rounded-circle thumb-sm" src="dashboard/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span class="pull-right">07:23 AM</span>
                                                    <h6 class="m-0">Jonathan Smith</h6>
                                                    <small class="text-muted">From: jonathan@domain.com</small>
                                                </div>
                                            </div>

                                            <p><b>Hi Bro...</b></p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                                ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                                                Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
                                                laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                                                libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>

                                            <hr />

                                            <h6> <i class="fa fa-paperclip mb-2"></i> Attachments <span>(3)</span> </h6>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <a href="#"> <img src="dashboard/images/attached-files/img-1.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a href="#"> <img src="dashboard/images/attached-files/img-2.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a href="#"> <img src="dashboard/images/attached-files/img-3.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card-box -->

                                        <div class="media mb-0 mt-5">
                                            <img class="d-flex mr-3 rounded-circle thumb-sm" src="dashboard/images/users/avatar-7.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <div class="card-box">
                                                    <div class="summernote">
                                                        <h6>This is an Air-mode editable area.</h6>
                                                        <ul>
                                                            <li>
                                                                Select a text to reveal the toolbar.
                                                            </li>
                                                            <li>
                                                                Edit rich document on-the-fly, so elastic!
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            End of air-mode area
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="button" class="btn btn-primary waves-effect waves-light w-md m-b-30">Send</button>
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
    <script src="dashboard/js/custom.min.js"></script>
    @endsection
</body>

</html>