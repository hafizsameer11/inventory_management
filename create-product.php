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
                                <h4 class="page-title mb-0 font-size-18">Create Product</h4>

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
                                    <h4 class="card-title">Add a new product</h4>

                                    <form class="custom-validation" action="backend\manager\product-manager.php" novalidate="" method="post">
                                        <div class="row">
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Product title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Type something">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label"> Product Code</label>
                                                <input type="text" name="product_code" class="form-control" placeholder="Type something">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label"> SKU </label>
                                                <input type="text" name="sku" class="form-control" placeholder="Type something">
                                            </div>
                                            <!-- <div class="mb-3 col-lg-6">
                                                <label class="form-label"> SKU </label>
                                                <input type="text" name="sku" class="form-control" placeholder="Type something">
                                            </div> -->


                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Product Price</label>
                                                <div>
                                                    <input type="text" id="" class="form-control" name="price" placeholder="e.g 100">
                                                </div>

                                            </div>
                                        </div>



                                        <div class="mb-3">
                                            <label class="form-label">Textarea</label>
                                            <div>
                                                <textarea required="" class="form-control" rows="5" name="discription"></textarea>
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