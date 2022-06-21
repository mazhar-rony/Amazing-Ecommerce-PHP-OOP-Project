<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Sizes\Size;

$sizes = new Size();

$sizes = $sizes->all();
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
              <h3>Size List</h3>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Size List</h2>
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

                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th>Sl</th>
                              <th>Size</th>
                              <th>Created At</th>
                              <th>Updated At</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            foreach ($sizes as $key => $size) :
                            ?>
                              <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $size['size'] ?></td>
                                <td><?= $size['created_at'] ?></td>
                                <td><?= $size['updated_at'] ?></td>
                                <td class="d-flex">
                                  <a class="btn btn-primary btn-sm" href="show.php?id=<?= $size['id'] ?>">Show</a> 
                                  <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $size['id'] ?>">Edit</a> 
                                  <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?= $size['id'] ?>" />
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