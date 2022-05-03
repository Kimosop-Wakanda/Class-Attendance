<?php
include("./connection/DB.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Other Utilities</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mark-attendance.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mark-attendance.css">

    <style>
        body {
            margin: 0 !important;
            padding: 0 !important;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        .round {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: relative;
            background: red;
            display: inline-block;
            padding: 0.3rem 0.2rem !important;
            margin: 0.3rem 0.2rem !important;
            left: -18px;
            top: 10px;
            z-index: 99 !important;
        }

        .round>span {
            color: white;
            display: block;
            text-align: center;
            font-size: 1rem !important;
            padding: 0 !important;
        }

        #list {

            display: none;
            top: 33px;
            position: absolute;
            right: 2%;
            background: #ffffff;
            z-index: 100 !important;
            width: 25vw;
            margin-left: -37px;
            padding: 0 !important;
            margin: 0 auto !important;


        }

        .message>span {
            /* width: 100%; */
            display: block;
            color: grey;
            text-align: justify;
            margin: 0.2rem 0.3rem !important;
            padding: 0.3rem !important;
            line-height: 1rem !important;
            font-weight: bold;
            border-bottom: 1px solid white;
            font-size: 1rem !important;
        }

        /* .message {
            background: cyan;
            margin: 0.3rem 0.2rem !important;
            padding: 0.2rem 0 !important;
            width: 100%;
            display: block;

        } */

        .message>.msg {
            width: 100%;
            margin: 0.1rem 0.2rem !important;
            padding: 0.1rem 0.1rem !important;
            text-align: justify;
            font-weight: bold;
            display: block;
            word-wrap: break-word;
        }

        .navbar navbar-inverse {
            background-color: blueviolet;
        }

        .nv {
            /* width: 100px; */
            background-color: blueviolet;
            height: 100px;
        }

        /* .wrapper {
            width: 1000px;
        } */

        #content {
            height: 20px;
        }

        .container {
            background-color: cyan;
            height: 300px;
            padding: 2rem 2rem;
            border-radius: 25px;

        }
    </style>

</head>

<body id="page-top">
    <?php
    $find_notifications = "Select * from inf where active = 1";
    $result = mysqli_query($connection, $find_notifications);
    $count_active = '';
    $notifications_data = array();
    $deactive_notifications_dump = array();
    while ($rows = mysqli_fetch_assoc($result)) {
        $count_active = mysqli_num_rows($result);
        $notifications_data[] = array(
            "n_id" => $rows['n_id'],
            "notifications_name" => $rows['notifications_name'],
            "message" => $rows['message']
        );
    }
    //only five specific posts
    $deactive_notifications = "Select * from inf where active = 0 ORDER BY n_id DESC LIMIT 0,5";
    $result = mysqli_query($connection, $deactive_notifications);
    while ($rows = mysqli_fetch_assoc($result)) {
        $deactive_notifications_dump[] = array(
            "n_id" => $rows['n_id'],
            "notifications_name" => $rows['notifications_name'],
            "message" => $rows['message']
        );
    }

    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Class Attendance</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Register units and Mark Attendance</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Register Units</a>
                        <a class="collapse-item" href="cards.html">Mark Attendance</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Notification</a>
                        <a class="collapse-item" href="utilities-border.html">Contact</a>
                        <a class="collapse-item" href="utilities-animation.html">About Us</a>
                        <a class="collapse-item active" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>

                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="content">

                <!-- Top Tab -->
                <div class="nv">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">

                            <div class="navbar-header">
                                <a class="navbar-brand" style="color: white" href="#">Class Attendance</a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li><i class="fa fa-bell" id="over" data-value="<?php echo $count_active; ?>" style="z-index:-99 !important;font-size:32px;color:white;margin:0.5rem 0.4rem !important;"></i></li>
                                <?php if (!empty($count_active)) { ?>
                                    <div class="round" id="bell-count" data-value="<?php echo $count_active; ?>"><span><?php echo $count_active; ?></span></div>
                                <?php } ?>

                                <?php if (!empty($count_active)) { ?>
                                    <div id="list">
                                        <?php
                                        foreach ($notifications_data as $list_rows) { ?>
                                            <li id="message_items">
                                                <div class="message alert alert-warning" data-id=<?php echo $list_rows['n_id']; ?>>
                                                    <span><?php echo $list_rows['notifications_name']; ?></span>
                                                    <div class="msg">
                                                        <p>
                                                            <?php
                                                            echo $list_rows['message'];
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }
                                        ?>

                                    <?php } else { ?>
                                        <!--old Messages-->
                                        <div id="list">
                                            <?php
                                            foreach ($deactive_notifications_dump as $list_rows) { ?>
                                                <li id="message_items">
                                                    <div class="message alert alert-danger" data-id=<?php echo $list_rows['n_id']; ?>>
                                                        <span><?php echo $list_rows['notifications_name']; ?></span>
                                                        <div class="msg">
                                                            <p>
                                                                <?php
                                                                echo $list_rows['message'];
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php }
                                            ?>
                                            <!--old Messages-->

                                        <?php } ?>

                                        </div>
                            </ul>

                        </div>

                    </nav>
                </div><br><br>

                <!-- End of Top Tab -->

                <div class="container">

                    <h3 style="text-align: center; color:black ">Mark Your Attendance here:</h3>
                    <hr color="black; width=50%"><br>

                    <form class="form-horizontal" id="frm_data">
                        <div class="form-group row">
                            <label class="control-label col-md-4" for="notification"><b>Units</b></label>
                            <div class="col-md-6">
                                <!-- <input type="text" name="notifications_name" id="notifications_name" class="form-control" placeholder="Notification name" required /> -->
                                <select name="notifications_name" id="notifications_name" class="form-control" placeholder="Notification name" required>

                                    <option value="research methodology">research methodology</option>
                                    <option value="mobile application">mobile application</option>
                                    <option value="programming languages">programming languages</option>
                                    <option value="simulation and modelling">simulation and modelling</option>
                                    <option value="artificial intelligence">artificial intelligence</option>
                                    <option value="distributed systems">distributed systems</option>
                                    <option value="operations research">operations research</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4" for="notification"><b>Attendance Status</b></label>
                            <div class="col-md-6">
                                <!-- <textarea style="resize:none !important;" name="message" id="message" rows="4" cols="10" class='form-control'></textarea> -->
                                <select name="message" id="message" class="form-control">
                                    <option value="present">present</option>
                                    <option value="absent">absent</option>
                                    <option value="absent with permission">absent with permission</option>
                                    <option value="apply for leave of absence">apply for leave of absence</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 col-offset-2" style="text-align:center;">
                                <input type="submit" id="notify" name="submit" class="btn btn-danger" value="Mark Attendance" />
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

</body>

<script>
    $(document).ready(function() {
        var ids = new Array();
        $('#over').on('click', function() {
            $('#list').toggle();
        });

        //Message with Ellipsis
        $('div.msg').each(function() {
            var len = $(this).text().trim(" ").split(" ");
            if (len.length > 12) {
                var add_elip = $(this).text().trim().substring(0, 65) + "…";
                $(this).text(add_elip);
            }

        });


        $("#bell-count").on('click', function(e) {
            e.preventDefault();

            let belvalue = $('#bell-count').attr('data-value');

            if (belvalue == '') {

                console.log("inactive");
            } else {
                $(".round").css('display', 'none');
                $("#list").css('display', 'block');

                // $('.message').each(function(){
                // var i = $(this).attr("data-id");
                // ids.push(i);

                // });
                //Ajax
                $('.message').click(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: './connection/deactive.php',
                        type: 'POST',
                        data: {
                            "id": $(this).attr('data-id')
                        },
                        success: function(data) {

                            console.log(data);
                            location.reload();
                        }
                    });
                });
            }
        });

        $('#notify').on('click', function(e) {
            e.preventDefault();
            var name = $('#notifications_name').val();
            var ins_msg = $('#message').val();
            if ($.trim(name).length > 0 && $.trim(ins_msg).length > 0) {
                var form_data = $('#frm_data').serialize();
                $.ajax({
                    url: './connection/insert.php',
                    type: 'POST',
                    data: form_data,
                    success: function(data) {
                        location.reload();
                    }
                });
            } else {
                alert("Please Fill All the fields");
            }


        });
    });
</script>

</html>