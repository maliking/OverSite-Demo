<?php
require 'databaseConnection.php';

$dbConn = getConnection();
$sql = "SELECT * FROM HouseInfo";
$stmt = $dbConn->prepare($sql);
$stmt->execute();
$houses = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RE/MAX Salinas | Office Inventory</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- BEGIN TEMPLATE default-css.php INCLUDE -->
        <?php include "./templates-admin/default-css.php" ?>
        <!-- END TEMPLATE default-css.php INCLUDE -->

        <!-- PAGE-SPECIFIC CSS -->
        <link rel="stylesheet" href="dist/css/vendor/footable.bootstrap.min.css">
    </head>

    <body class="hold-transition skin-red-light sidebar-mini">
        <!-- Site Wrapper -->
        <div class="wrapper">
            <!-- BEGIN TEMPLATE header.php INCLUDE -->
            <?php include "./templates-admin/header.php" ?>
            <!-- END TEMPLATE header.php INCLUDE -->

            <!-- BEGIN TEMPLATE nav.php INCLUDE -->
            <?php include "./templates-admin/nav.php" ?>
            <!-- END TEMPLATE nav.php INCLUDE -->

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Office Inventory
                    </h1>
                    <ol class="breadcrumb">
                        <li>Properties</li>
                        <li class="active"><a href="#"><i class="fa fa-archive"></i> Office Inventory</a></li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <table class="table table-bordered table-striped" id="inventory-table">
                                        <thead>
                                            <tr>
                                                <th>MLS #</th>
                                                <th>Property</th>
                                                <th>Bedroom</th>
                                                <th>Bathroom</th>
                                                <th>Price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <?php
                                            foreach ($houses as $house) {
                                                echo "<tr>";
                                                echo "<td><a href='#'>" . $house['listingId'] . "</a></td>";
                                                echo "<td>" . $house['address'] . "</td>";
                                                echo "<td>" . $house['bedrooms'] . "</td>"; 
                                                echo "<td>" . $house['bathrooms'] . "</td>"; 
                                                echo "<td>" . '$' . number_format($house['price'], 0) . "</td>";         
                                                echo "<td>" . "<a style='margin-right: 10px' href='#'><i class='fa fa-image'></i></a> <a href='#'><i class='fa fa-map-marker'></i></a>" . "</td>";                         
                                                echo "</tr>";
                                            }
                                        ?>

                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.wrapper -->

        <!-- BEGIN TEMPLATE default-footer.php INCLUDE -->
<?php include "./templates-admin/default-footer.php" ?>
        <!-- END TEMPLATE default-footer.php INCLUDE -->

        <!-- BEGIN TEMPLATE default-js.php INCLUDE -->
<?php include "./templates-admin/default-js.php" ?>
        <!-- END TEMPLATE default-js.php INCLUDE -->

        <script type="text/javascript" src="dist/js/vendor/footable.min.js"></script>
        <script>

            jQuery(function ($) {
                $('.table').footable({
                    "sorting": {
                        "enabled": true
                    },
                    "filtering": {
                        "enabled": true
                    }
                });
            });

        </script>
    </body>

</html>
