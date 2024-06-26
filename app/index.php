<?php
include '../database/koneksi.php';
include '../database/class/auth.php';
session_start();

$pdo = Koneksi::connect();
$auth = new auth($pdo);

$pdo = Koneksi::disconnect();

if (!$auth->isLogin() && $auth->isLogin() == false) {
    $log = isset($_GET['auth']) ? $_GET['auth'] : 'auth';
    switch ($log) {
        case 'login':
            include 'auth/login.php';
            break;
        case 'register':
            include 'auth/register.php';
            break;
        default:
            include 'auth/login.php';
            break;
    }
} else {


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard</title>

        <?php
        include 'layout/stylecss.php';
        ?>
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php
            include 'layout/sidebar.php';
            ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php
                    include 'layout/header.php';
                    ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">




                        <?php
                        $page = isset($_GET["page"]) ? $_GET["page"] : "";
                        switch ($page) {
                            case "user":
                                include 'page/user/default.php';
                                break;
                            case "customer":
                                include 'page/customer/default.php';
                                break;
                            case "product":
                                include 'page/product/default.php';
                                break;
                            default:
                                include 'page/dashboard/index.php';
                                break;
                        }
                        ?>




                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->

                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->


        <?php
        require 'layout/stylejs.php';
        ?>
    </body>

    </html>
<?php
}
?>