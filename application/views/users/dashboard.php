<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url(); ?>application/views/users/asset/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>application/views/users/asset/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>application/views/users/asset/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="<?php echo base_url(); ?>application/views/users/asset/css/style1.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>application/views/users/asset/colors/blue.css" id="theme" rel="stylesheet">
    </head>

    <body class="fix-header fix-sidebar card-no-border">

        <div id="main-wrapper">
            <header class="topbar" style="height: 71px;">
                <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                    <div class="navbar-header">
                        <a class="navbar-brand text-white text-center d-flex justify-content-center align-items-center">
                            &nbsp;&nbsp;&nbsp;&nbsp;Senior's Care
                        </a>
                    </div>
                    <div class="navbar-collapse d-flex justify-content-center align-items-center">
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search">
                                    <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                                </form>
                            </li>
                        </ul>
                        <ul class="navbar-nav my-lg-0">
                            <li class="nav-item dropdown">
                                <a style="background: #fff;display: flex;justify-content: center;align-items: center;padding: 5px 20px;" href="<?php echo base_url(); ?>Users/logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="left-sidebar">
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li id="parent">
                                <a id="child1" class="waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-gauge"></i><span id="appt_menu" class="hide-menu active_span">Appointments</span></a>
                            </li>
<!--                            <li> <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Photos and Files</span></a>-->
                            <!--</li>-->
                            <li> <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>Users/report_problem" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Report Problems</span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>Users/accounts" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">My Profile & Accounts</span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>Users/doctor_prescription" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Doctor prescriptions</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="sidebar-footer">
                        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> 
                    </div>
            </aside>
            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row page-titles">
                        <div class="col-md-5 col-8 align-self-center">
                            <h3 class="text-themecolor">Appointments</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Appointment</li>
                            </ol>
                        </div>
<!--                        <div class="col-md-7 col-4 align-self-center">
                            <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">Un-approved</a>
                        </div>-->
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel panel-default">
                                <header class="panel-heading">
                                    <span class="h5">Appointment</span>
                                </header>
                                <div class="panel-body">
                                    <table id="example" class="table table-striped table-bordered mydatatable" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr no.</th>
                                                <th>Name</th>
                                                <th>Appointment Date</th>
                                                <th>Medical condition</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $cnt = 1;
                                                    foreach ($patient_record as $value) {
                                                    $status_count = $value->status;        
                                             ?>
                                            <tr>
                                                <td><?php echo $cnt ?></td>
                                                <td><?php echo $value->firstname ?> <?php echo $value->lastname ?></td>
                                                <td><?php echo $value->apndate ?></td>
                                                <td><?php echo $value->medcondition ?></td>
                                                <td><?php if ($status_count == 0) { ?>
                                                    <span style="background:#fc4b6c;padding: 5px 10px;color: #fff;">unapproved</span>
                                                    <?php } else { ?>
                                                    <span style="background:#8ec165;padding: 5px 10px;color:#fff;">approved</span>
                                                        <?php  } ?>
                                                </td>
                                            </tr>
                                            <?php $cnt++; } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <footer class="panel-footer text-right bg-light lter">
                                    <!--                                    <button type="submit" class="btn btn-success btn-s-xs" onclick="return addTechVali();"></button>-->

                                </footer>

                            </section>
                        </div>
                    </div>
                </div>

                <footer class="footer"> © 2021 Senior Health care portal </footer>

            </div>

        </div>

        <script src="<?php echo base_url(); ?>application/views/users/asset/plugins/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/users/asset/plugins/bootstrap/js/tether.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/users/asset/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/users/asset/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>application/views/users/asset/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>application/views/users/asset/js/sidebarmenu.js"></script>
        <script src="<?php echo base_url(); ?>application/views/users/asset/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="<?php echo base_url(); ?>application/views/users/asset/js/custom.js"></script>
        <script src="<?php echo base_url(); ?>application/views/users/asset/js/dashboard1.js"></script>
        <script>
            $(document).ready(function () {
                $('#parent').addClass("active");
                $("#child1").addClass("active");
            });
        </script>
    </body>
</html>
