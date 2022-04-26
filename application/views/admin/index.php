//header.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>pustaka-booking | <?= $judul; ?></title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?= base_url('assets/');
                                        ?>datatable/jquery.dataTables.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/');
                                        ?>datatable/datatables.js'; ?>"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,30
0i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        //index.php
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- row ux-->
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2 bgprimary">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-white textuppercase mb-1">Jumlah Anggota</div>
                                    <div class="h1 mb-0 font-weight-bold text-white"><?=
                                                                                        $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows();
                                                                                        ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2 bgwarning">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-white textuppercase mb-1">Stok Buku Terdaftar</div>
                                    <div class="h1 mb-0 font-weight-bold text-white">
                                        <?php
                                        $where = ['stok != 0'];
                                        $totalstok = $this->ModelBuku->total(
                                            'stok',
                                            $where
                                        );
                                        echo $totalstok;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('buku'); ?>"><i class="fas fabook fa-3x text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2 bgdanger">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-white textuppercase mb-1">Buku yang dipinjam</div>
                                    <div class="h1 mb-0 font-weight-bold text-white">
                                        <?php
                                        $where = ['dipinjam != 0'];
                                        $totaldipinjam = $this->ModelBuku->total(
                                            'dipinjam',
                                            $where
                                        );
                                        echo $totaldipinjam;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('user'); ?>"><i class="fas fauser-tag fa-3x text-success"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2 bgsuccess">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-white textuppercase mb-1">Buku yang dibooking</div>
                                    <div class="h1 mb-0 font-weight-bold text-white">
                                        <?php
                                        $where = ['dibooking !=0'];
                                        $totaldibooking = $this->ModelBuku->total('dibooking', $where);
                                        echo $totaldibooking;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('user'); ?>"><i class="fas fashopping-cart fa-3x text-danger"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row ux-->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- row table-->
            <div class="row">
                <div class="table-responsive table-bordered col-sm-5 ml-auto mrauto mt-2">
                    <div class="page-header">
                        <span class="fas fa-users text-primary mt-2 "> Data
                            User</span>
                        <a class="text-danger" href="<?php echo
                                                        base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 floatright"> Tampilkan</i></a>
                    </div>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Anggota</th>
                                <th>Email</th>
                                <th>Role ID</th>
                                <th>Aktif</th>
                                <th>Member Sejak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($anggota as $a) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $a['nama']; ?></td>
                                    <td><?= $a['email']; ?></td>
                                    <td><?= $a['role_id']; ?></td>
                                    <td><?= $a['is_active']; ?></td>
                                    <td><?= date('Y', $a['tanggal_input']); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive table-bordered col-sm-5 ml-auto mrauto mt-2">
                    <div class="page-header">
                        <span class="fas fa-book text-warning mt-2"> Data
                            Buku</span>
                        <a href="<?= base_url('buku'); ?>"><i class="fas fa-search
text-primary mt-2 float-right"> Tampilkan</i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table mt-3" id="table-datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>ISBN</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($buku as $b) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $b['judul_buku']; ?></td>
                                        <td><?= $b['pengarang']; ?></td>
                                        <td><?= $b['penerbit']; ?></td>
                                        <td><?= $b['tahun_terbit']; ?></td>
                                        <td><?= $b['isbn']; ?></td>
                                        <td><?= $b['stok']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end of row table-->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    //footer.php
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Web Programming Univ. BSI with
                    Bootstrap SB Admin 2 <?= date('Y'); ?></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin
                        mau keluar?</h5>
                    <button class="close" type="button" datadismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah jika
                    kamu yakin sudah selesai.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=
                                                        base_url('autentifikasi/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/');
                    ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/');
                    ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jqueryeasing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin2.min.js"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-filelabel').addClass("selected").html(fileName);
        });
        $(document).ready(function() {
            $("#table-datatable").dataTable();
        });
        $('.alert-message').alert().delay(3500).slideUp('slow');
    </script>
</body>

</html>
//sidebar.php
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebardark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center
justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka
            Booking</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu-->

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('buku'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Data Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('user/anggota'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Data Anggota</span></a>
    </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -- > 
 //topbar.php
 <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white
topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-mdnone rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800"><?= $judul; ?></h1>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" ariahaspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline textgray-600 small"><?= $user['nama']; ?> </span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right
shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?=
                                                        base_url('user'); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2
text-gray-400"></i>
                            Profile Saya
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?=
                                                        base_url('autentifikasi/logout'); ?>" data-toggle="modal" datatarget="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fafw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->