<?php
session_start();
include '../koneksi.php';
include 'include/Helpers.php';
include 'include/Kategori.php';
include 'include/Proposal.php';
include 'include/FilePendukung.php';

$helper = new Helpers;

if (!empty($_SESSION['username'])) :?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]--></head>
    <body>
    <section id="container">
    <!-- **********************************************************************************************************************************************************
              TOP BAR CONTENT & NOTIFICATIONS
              *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="#" class="logo"><b>ADMIN PANEL</b></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings start -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                </a>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                </a>
            </li>
            <!-- inbox dropdown end --></ul>
        <!--  notification end --></div>
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li>
                <a class="logout" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
              MAIN SIDEBAR MENU
              *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
                <a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a>
            </p>
            <h5 class="centered"><?= !empty($_SESSION['nama']) ? $_SESSION['nama'] : $_SESSION['username'];?></h5>
            <li class="mt">
                <a <?=$helper->menuAktif(['dashboard', '']);?> href="index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a  <?=$helper->menuAktif(['create-proposal', 'daftar-proposal']);?> href="javascript:;">
                <i class="fa fa-file-text"></i>
                <span>Proposal</span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="index.php?act=daftar-proposal">Daftar Proposal</a>
                    </li>
                    <li>
                        <a href="index.php?act=create-proposal">Ajukan Proposal</a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                <i class="fa fa-user"></i>
                <span>Profile</span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="calendar.html">Lihat Profile</a>
                    </li>
                    <li>
                        <a href="gallery.html">Edit Profile</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
              MAIN CONTENT
              *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">

                <?php include 'switch.php';?>

            </div>

        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <style type="text/css">
        .site-footer {
            /*position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: -1;*/
        }
    </style>
    <footer class="site-footer">
    <div class="text-center">
         2014 - Alvarez.is <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
    </div>
    </footer>
    <!--footer end--></section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
    <script src="assets/js/zabuto_calendar.js"></script>
    <script src="assets/ckeditor/ckeditor.js"></script>
    <script type="application/javascript">
                $(document).ready(function () {
                    $("#date-popover").popover({html: true, trigger: "manual"});
                    $("#date-popover").hide();
                    $("#date-popover").click(function (e) {
                        $(this).hide();
                    });
                    $("#my-calendar").zabuto_calendar({
                        action: function () {
                            return myDateFunction(this.id, false);
                        },
                        action_nav: function () {
                            return myNavFunction(this.id);
                        },
                        ajax: {
                            url: "show_data.php?action=1",
                            modal: true
                        },
                        legend: [
                            {type: "text", label: "Special event", badge: "00"},
                            {type: "block", label: "Regular event", }
                        ]
                    });

                    CKEDITOR.replace('Proposal[keterangan]');
                    CKEDITOR.config.allowedContent = true;
                });
                function myNavFunction(id) {
                    $("#date-popover").hide();
                    var nav = $("#" + id).data("navigation");
                    var to = $("#" + id).data("to");
                    console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
                }

            </script>
    </body>
    </html>
<?php 
else :
    header("Location: login.php");
endif;
?>