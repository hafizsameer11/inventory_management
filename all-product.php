<!doctype html>
<html lang="en">


<?php
include_once 'include/head.php';
session_start();
if (isset($_SESSION['uid'])) {
} else {
    header('location:login.php');
}

if(isset($_SESSION['status']) ){
    echo "Hello wolrd";
    echo "<script>swal('Success','{$_SESSION['message']}','success')</script>";
    unset($_SESSION['status']);
    unset($_SESSION['message']);
    unset($_SESSION['success']);

  
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
                                <h4 class="page-title mb-0 font-size-18">All Product</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to Qovex Create product</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Table Edits</h4>
                                    <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making
                                        table
                                        rows editable.</p>

                                    <div class="table-responsive">
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Price</th>
                                                    <th>SKU</th>
                                                    <th>Product Code</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                        
                                            <?php
                                            include_once 'backend/controller/db.php';
                                                    $record=new db();
                                                    $records=$record->select('*','product');
                                                $i=1;
                                                 foreach($records as $data ){
                                                 ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $i?></td>
                                                            <td>
                                                                <?php echo $data['title'] ?>
                                                            </td>
                                                            <td><?php echo $data['price'] ?></td>
                                                            <td><?php echo $data['SKU'] ?></td>
                                                            <td><?php echo $data['product_code'] ?></td>
                                                            <td>
                                                                <a href="update-product.php?pid=<?php echo $data['id']?>" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </td>
                                                            <td><a class="btn btn-outline-danger btn-sm edit" href="backend/manager/product-manager.php?pid=<?php echo $data['id']?>" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a></td>
                                                        </tr>
                                                    </tbody>

                                                    <?php
                                                    $i++;
                                                 }
                                             ?>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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