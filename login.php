<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistem Keamanan Data</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <style type="text/css">
        body {
            margin-top: 100px;
            background: #f6f9fc;
        }

        .account-block {
            padding: 0;
            background-image: url('assets/img/');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            position: relative;
        }

        .account-block .overlay {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .account-block .account-testimonial {
            text-align: center;
            color: #fff;
            position: absolute;
            margin: 0 auto;
            padding: 0 1.75rem;
            bottom: 3rem;
            left: 0;
            right: 0;
        }

        .text-theme {
            color: #5369f8 !important;
        }

        .btn-theme {
            background-color: #5369f8;
            border-color: #5369f8;
            color: #fff;
        }
    </style>
</head>

<body>
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <center>
                                            <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                        </center>
                                    </div>

                                    <h6 class="h5 mb-0">WELCOME :) </h6>
                                    <p class="text-muted mt-2 mb-5">Selamat Datang Siwa Baru</p>
                                    <form method="POST" action="loginProcess.php">
                                        <form method="POST" action="dash.php">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Username" id="username" name="username" required>
                                            </div>
                                            <div class="form-group mb-5">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" placeholder="Masukkan Password" id="password" name="password" required>
                                            </div>
                                            <button type="submit" class="btn btn-theme">Login</button>
                                        </form>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <p class="text-muted text-center mt-3 mb-5">Don't have an account? <a href="index.php" class="text-primary ml-1">Register</a></p>

                    <!-- end row -->
                </div>
                <!-- end col -->
            </div>
            <!-- Row -->
        </div>

        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>