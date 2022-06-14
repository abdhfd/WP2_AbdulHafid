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


        <!-- INDEX.php -->
        <div class="container-fluid">

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Jumlah Anggota</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('user/anggota'); ?>"> <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Stok buku terdaftar-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Stok Buku Terdaftar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
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

                <!-- Buku yang dipinjam -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Buku yang dipinjam
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                        $where = ['dipinjam != 0'];
                                        $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
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

                <!-- Buku yang di booking -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Buku Yang DiBooking</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                        $where = ['dibooking !=0'];
                                        $totaldibooking = $this->ModelBuku->total('dibooking', $where);
                                        echo $totaldibooking;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('user'); ?>"> <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- row table-->
            <div class="row">
                <div class="table-responsive table-bordered col-sm-5 ml-auto mrauto mt-2">
                    <div class="page-header">
                        <span class="fas fa-users text-primary mt-2 "> Data
                            User</span>
                        <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 floatright"> Tampilkan</i></a>
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
                        <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
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

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->