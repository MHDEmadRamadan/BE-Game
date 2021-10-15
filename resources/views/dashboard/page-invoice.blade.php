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
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
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
                    <h3 class="text-primary">Dashboard</h3> </div>
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
                    <div class="col-lg-12">
                        <div id="invoice" class="effect2">
                            <div id="invoice-top">
                                <div class="invoice-logo"></div>
                                <div class="invoice-info">
                                    <h2>john doe</h2>
                                    <p> hello@Zebramin.com <br> +8801629599859
                                    </p>
                                </div>
                                <!--End Info-->
                                <div class="title">
                                    <h4>Invoice #1069</h4>
                                    <p>Issued: February 15, 2018<br> Payment Due: February 27, 2018
                                    </p>
                                </div>
                                <!--End Title-->
                            </div>
                            <!--End InvoiceTop-->



                            <div id="invoice-mid">

                                <div class="clientlogo"></div>
                                <div class="invoice-info">
                                    <h2>Client Name</h2>
                                    <p>mariam@gmail.com<br> 555-555-5555
                                        <br>
                                </div>

                                <div id="project">
                                    <h2>Project Description</h2>
                                    <p>Proin cursus, dui non tincidunt elementum, tortor ex feugiat enim, at elementum enim quam vel purus. Curabitur semper malesuada urna ut suscipit.</p>
                                </div>

                            </div>
                            <!--End Invoice Mid-->

                            <div id="invoice-bot">

                                <div id="invoice-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr class="tabletitle">
                                                <td class="table-item">
                                                    <h2>Item Description</h2>
                                                </td>
                                                <td class="Hours">
                                                    <h2>Hours</h2>
                                                </td>
                                                <td class="Rate">
                                                    <h2>Rate</h2>
                                                </td>
                                                <td class="subtotal">
                                                    <h2>Sub-total</h2>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext">Communication</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">5</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$75</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$375.00</p>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext">Asset Gathering</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">3</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$75</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$225.00</p>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext">Design Development</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">5</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$75</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$375.00</p>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext">Animation</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">20</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$75</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$1,500.00</p>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext">Animation Revisions</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">10</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$75</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$750.00</p>
                                                </td>
                                            </tr>

                                            <tr class="service">
                                                <td class="tableitem">
                                                    <p class="itemtext"></p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">HST</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">13%</p>
                                                </td>
                                                <td class="tableitem">
                                                    <p class="itemtext">$419.25</p>
                                                </td>
                                            </tr>


                                            <tr class="tabletitle">
                                                <td></td>
                                                <td></td>
                                                <td class="Rate">
                                                    <h2>Total</h2>
                                                </td>
                                                <td class="payment">
                                                    <h2>$3,644.25</h2>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <!--End Table-->

                                <form action="#" method="post" target="_top" class="m-t-15">
                                    <input type="image" src="dashboard/images/paypal.png" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                </form>


                                <div id="legalcopy">
                                    <p class="legal"><strong>Thank you for your business!</strong> Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.
                                    </p>
                                </div>

                            </div>
                            <!--End InvoiceBot-->
                        </div>
                        <!--End Invoice-->
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
