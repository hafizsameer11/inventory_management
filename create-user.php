<!doctype html>
<html lang="en">


<?php
include_once 'include/head.php';
session_start();
if (isset($_SESSION['uid'])) {
} else {
    header('location:login.php');
}
?>

<body data-layout="detached" data-topbar="colored">



    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">


            <?php
            include_once 'include/header.php';
            ?>



            <?php
            include_once 'include/sidebar.php';
            ?>


            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Create user</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to Qovex Create product</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add a new user</h4>

                                    <form class="custom-validation" action="backend\manager\user-manager.php" novalidate="" method="post">
                                        <div class="row">
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label"> Name </label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label"> Email </label>
                                                <input type="text" name="email" class="form-control" placeholder="Enter Email">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label"> Password </label>
                                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label"> User Role </label>
                                                <div>
                                                    <!-- <input type="text" id="" class="form-control" name="price" placeholder="seller/customer"> -->
                                                    <select id="user_role" name="user_role" class="form-control">
                                                        <option value="1" name="role">User</option>
                                                        <option value="2" name="role">Admin</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                </div>
                            </div>

                            <div>
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1" name="create">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- end row -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Qovex.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->

    <!-- Right Sidebar -->

    <?php
    include_once 'include/right_sidebar.php';
    ?>


    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php
    include_once 'include/js_link.php';
    ?>

</body>

</html>