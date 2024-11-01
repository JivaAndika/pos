<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
    <title>Ecommerce Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../assets/modules/jqvmap/dist/jqvmap.min.css" />
    <link rel="stylesheet" href="../assets/modules/summernote/summernote-bs4.css" />
    <link rel="stylesheet" href="../assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../assets/modules/jquery-selectric/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/components.css" />
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- NAV -->
            <?php include '../components/layout/navbar.php' ?>
            <!-- SIDEBAR -->
            <?php include '../components/layout/sidebar.php' ?>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Edit Akun</h1>
                    </div>
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <img src="../information.jpg" alt="Information Image" class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit Akun</h4>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Avatar</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="site-favicon">
                                                <label class="custom-file-label" for="site-favicon">Choose File</label>
                                            </div>
                                            <small class="form-text text-muted">The image must have a maximum size of 1MB</small>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control selectric">
                                                <option>Laki Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="loremipsum@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Password Lama</label>
                                            <input type="password" class="form-control" placeholder="Masukkan Password Lama">
                                        </div>
                                        <div class="form-group">
                                            <label>Password Baru</label>
                                            <input type="password" class="form-control" placeholder="Masukkan Password Baru">
                                        </div>
                                        <div class="form-group">
                                            <label>Konfirmasi Password</label>
                                            <input type="password" class="form-control" placeholder="Konfirmasi Password Baru">
                                        </div>
                                        <div class="d-flex flex-column flex-sm-row justify-content-end gap-2">
                                            <a href="./informasi-akun.php" class="btn btn-primary mb-2 mb-sm-0 mr-0 mr-sm-2 ">Informasi Akun</a>
                                           
                                            <a href="./ganti_password-akun.php" class="btn btn-secondary">
                                                <i class="far fa-edit"></i> Edit Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- FOOTER -->
            <?php include '../components/layout/footer.php' ?>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../assets/modules/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraries -->
    <script src="../assets/modules/jquery.sparkline.min.js"></script>
    <script src="../assets/modules/chart.min.js"></script>
    <script src="../assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="../assets/modules/summernote/summernote-bs4.js"></script>
    <script src="../assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
</body>

</html>
