<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Categories\Category;
use Amazing\ProductTypes\ProductType;
use Amazing\Colors\Color;
use Amazing\Sizes\Size;

$categories = new Category();
$product_types = new ProductType();
$product_colors = new Color();
$product_sizes = new Size();

$categories = $categories->all();
$product_types = $product_types->all();
$product_colors = $product_colors->all();
$product_sizes = $product_sizes->all();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amazing | Ecommerce Website</title>

    <!-- Favicon -->
    <link href="../../images/favicon.png" rel="icon">

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <!-- Sidebar Navigation Start -->
            <?php include_once('../../partials/sidebar.php'); ?>
            <!-- Sidebar Navigation End -->

            <!-- Topbar Navigation Start -->
            <?php include_once('../../partials/topbar.php'); ?>
            <!-- Topbar Navigation End -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Create Product</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Create Product</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form action="store.php" id="create_product" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="product_name">Product Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="product_name" name="product_name" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="product_info">Product Information <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <textarea name="product_info" id="product_info" rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="short_description">Short Description <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <textarea name="short_description" id="short_description" rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="actual_price">Actual Price <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="number" id="actual_price" name="actual_price" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="discounted_price">Discounted Price
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="number" id="discounted_price" name="discounted_price" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category">Select Category
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select class="form-control" name="product_category">
                                                    <option>Choose option</option>
                                                    <?php foreach ($categories as $category) : ?>
                                                        <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="type">Select Type
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select class="form-control" name="product_type">
                                                    <option>Choose option</option>
                                                    <?php foreach ($product_types as $product_type) : ?>
                                                        <option value="<?= $product_type['id'] ?>"><?= $product_type['product_type'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="color">Select Color
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select class="select2_multiple form-control" name="product_color" multiple="multiple">
                                                    <option>Choose option</option>
                                                    <?php foreach ($product_colors as $product_color) : ?>
                                                        <option value="<?= $product_color['id'] ?>"><?= $product_color['color_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="size">Select Size
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select class="select2_multiple form-control" name="product_size" multiple="multiple">
                                                    <option>Choose option</option>
                                                    <?php foreach ($product_sizes as $product_size) : ?>
                                                        <option value="<?= $product_size['id'] ?>"><?= $product_size['size'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" type="file" id="image" name="image">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <a class="btn btn-primary" href="list.php">Cancel</a>
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../../../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../../build/js/custom.min.js"></script>
</body>

</html>