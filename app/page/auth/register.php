<?php

require('../../../database/koneksi.php');


if (isset($_POST['register'])) {

    $nama     = $_POST['nama'];
    $username = $_POST['username'];
    $role     = $_POST['role'];
    $password = $_POST['password'];


    $hashPassword = password_hash('$password', PASSWORD_BCRYPT);
    $query_sql = "INSERT INTO user (id_user, nama, username, password, role) VALUES (NULL,'$nama','$username','$hashPassword','$role')";
    $result = mysqli_query($koneksi, $query_sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>
    <link href="../../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " name="nama" id="nama" placeholder="nama" autofocus required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " name="username" id="username" placeholder="username">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0 mt-3">
                                        <select class="form-control " name="role" id="role">
                                            <option value="admin">admin</option>
                                            <option value="superAdmin">superAdmin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control " name="password" id="password" placeholder="password">
                                    </div>
                                </div>
                                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>


                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="../auth/login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <link href="../../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="../../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../../assets/js/sb-admin-2.min.js"></script>
    <script src="../../../assets/vendor/chart.js/Chart.min.js"></script>
    <script src="../../../assets/js/demo/chart-area-demo.js"></script>
    <script src="../../../assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>