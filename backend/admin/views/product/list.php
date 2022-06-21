<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Products\Product;
use Amazing\Categories\Category;
use Amazing\Colors\Color;
use Amazing\Sizes\Size;
use Amazing\ProductTypes\ProductType;

$product = new Product();
$categories = new Category();
$colors = new Color();
$sizes = new Size();
$types = new ProductType();

$products = $product->all();
$categories = $categories->all();
$colors = $colors->all();
$sizes = $sizes->all();
$types = $types->all();
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
  <!-- Datatables -->

  <link href="../../../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../../../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../../../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../../../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../../../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
              <h3>Product List</h3>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Product List</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="create.php"><button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"> Create New</i></button></a></li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">

                        <table id="datatable-buttons product-table" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th>Sl</th>
                              <th>Product Name</th>
                              <th>Product Info</th>
                              <th>Short Description</th>
                              <th>Description</th>
                              <th>Product Category</th>
                              <th>Product Size</th>
                              <th>Product Color</th>
                              <th>Product Type</th>
                              <th>Image</th>
                              <th>Actual Price</th>
                              <th>Discounted Price</th>
                              <th>Review</th>
                              <th>Created At</th>
                              <th>Updated At</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            foreach ($products as $key => $product) :
                            ?>
                              <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $product['product_name'] ?></td>
                                <td><?= substr($product['product_info'], 0, 15) ?>...</td>
                                <td><?= substr($product['short_description'], 0, 15) ?>...</td>
                                <td><?= substr($product['description'], 0, 15) ?>...</td>
                                <td><?php foreach ($categories as $category) : ?><?= ($product['product_category'] == $category['id']) ? $category['category_name'] : '' ?><?php endforeach; ?></td>
                                <td><?php foreach ($sizes as $size) : ?><?= ($product['product_size'] == $size['id']) ? $size['size'] : '' ?><?php endforeach; ?></td>
                                <td><?php foreach ($colors as $color) : ?><?= ($product['product_color'] == $color['id']) ? $color['color_name'] : '' ?><?php endforeach; ?></td>
                                <td><?php foreach ($types as $type) : ?><?= ($product['product_type'] == $type['id']) ? $type['product_type'] : '' ?><?php endforeach; ?></td>
                                <td class="text-center"><img src="<?= $upload_url . "products/" . $product['image'] ?>" alt="Slide" width="50" height="50"></td>
                                <td><?= $product['actual_price'] ?></td>
                                <td><?= $product['discounted_price'] ?></td>
                                <td><?= $product['review'] ?></td>
                                <td style="white-space:nowrap;"><?= $product['created_at'] ?></td>
                                <td style="white-space:nowrap;"><?= $product['updated_at'] ?></td>
                                <td class="d-flex">
                                  <a class="btn btn-primary btn-sm" href="show.php?id=<?= $product['id'] ?>">Show</a>
                                  <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $product['id'] ?>">Edit</a>
                                  <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?= $product['id'] ?>" />
                                    <button type="Submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                      Delete </button>
                                  </form>
                                </td>
                                </td>
                              </tr>
                            <?php
                            endforeach;
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- Footer Content Start -->
      <?php include_once('../../partials/footer.php'); ?>
      <!-- Footer Content End -->
    </div>
  </div>

  <script>
    $("#product-table").DataTable({
      responsive: true
    });
  </script>

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
  <!-- Datatables -->
  <script src="../../../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../../../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="../../../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../../../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="../../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="../../../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../../../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="../../../vendors/jszip/dist/jszip.min.js"></script>
  <script src="../../../vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="../../../vendors/pdfmake/build/vfs_fonts.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../../../build/js/custom.min.js"></script>

</body>

</html>