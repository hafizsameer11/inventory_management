<!doctype html>
<html lang="en">


<?php
include_once 'include/head.php';
session_start();
if (isset($_SESSION['uid']) && isset($_GET['pid'])) {
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
            include_once 'backend/controller/db.php';
            $pid = $_GET['pid'];
            $db = new db();
            $condition = "`id`='$pid'";
            $record = $db->select('*', 'product', $condition);

            ?>



            <?php
            include_once 'include/sidebar.php';
            ?>


            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="row">
                        <!-- <?php
                                echo "<pre>";
                                print_r($record);
                                echo "</pre>";
                                ?> -->
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Update Product</h4>

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
                                    <h4 class="card-title">Update product</h4>

                                    <form class="custom-validation" action="backend\manager\product-manager.php" novalidate="" method="post">
                                        <div class="row">
                                   
                                                <input type="text" name="pid" hidden class="form-control" value="<?php echo $record['id'] ?>" placeholder="Type something">
                                     
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Product title</label>
                                                <input type="text" name="title" class="form-control" value="<?php echo $record['title'] ?>" placeholder="Type something">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label"> Product Code</label>
                                                <input type="text" name="product_code" class="form-control" value="<?php echo $record['product_code'] ?>" placeholder="Type something">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label"> SKU </label>
                                                <input type="text" value="<?php echo $record['SKU'] ?>" name="sku" class="form-control" placeholder="Type something">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label"> Category </label>
                                                <select name="cat_id" class="form-control">
                                                    <option value="">Select category</option>
                                                    <?php
                                                    $cat_id = $record['cat_id'];
                                                    $condition = "`cat_id`='$cat_id'";
                                                    $select = $db->select('*','categories',$condition);
                                                    ?>
                                                    <option value="<?php echo $select['cat_id']?>" selected><?php echo $select['cat_name']?></option>
                                                    <?php
                                                    include_once 'backend/controller/db.php';
                                                    $category = new db();
                                                    $catories = $category->select('*', 'categories');
                                                    foreach ($catories as $value) { ?>
                                                        <option value="<?php echo $value['cat_id']?>"><?php echo $value['cat_name']?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>


                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Product Price</label>
                                                <div>
                                                    <input type="text" id="" class="form-control" name="price" value="<?php echo $record['price'] ?>" placeholder="e.g 100">
                                                </div>

                                            </div>
                                        </div>



                                        <div class="mb-3">
                                            <label class="form-label">Textarea</label>
                                            <div>
                                                <textarea required="" class="form-control" rows="5" name="discription"> <?php echo $record['discription'] ?></textarea>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1" name="update">
                                                    Update
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