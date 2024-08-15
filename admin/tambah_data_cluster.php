<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Cluster</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                        </div>
                        <div class="card-body">

                            <!-- Main content -->
                            <form class="form-horizontal style-form" style="margin-top: 10px;" action="tambah_cluster.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nama Desa</label>
                                    <div class="col-sm-6">
                                        <input name="Desa" type="text" class="form-control" placeholder="Nama Desa" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Potensi</label>
                                    <div class="col-sm-6">
                                        <input name="Potensi" class="form-control" type="text" placeholder="Potensi" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Program Pembangunan</label>
                                    <div class="col-sm-6">
                                        <input name="Program_Pembangunan" class="form-control" type="number" placeholder="Program Pembangunan" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Pasar</label>
                                    <div class="col-sm-6">
                                        <input name="Pasar" class="form-control" type="number" type="number" placeholder="Pasar" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Tenaga Kerja</label>
                                    <div class="col-sm-6">
                                        <input name="Tenaga_Kerja" class="form-control" type="number" placeholder="Tenaga Kerja" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Peluang Usaha</label>
                                    <div class="col-sm-6">
                                        <input name="Peluang_Usaha" class="form-control" type="number" placeholder="Peluang Usaha" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Modal Usaha</label>
                                    <div class="col-sm-6">
                                        <input name="Modal_Usaha" class="form-control" type="number" placeholder="Modal Usaha" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Keterampilan Masyarakat</label>
                                    <div class="col-sm-6">
                                        <input name="Keterampilan_Masyarakat" class="form-control" type="number" placeholder="Keterampilan Masyarakat" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Infrastuktur JalanRaya</label>
                                    <div class="col-sm-6">
                                        <input name="Infrastuktur_JalanRaya" class="form-control" type="number" placeholder="Infrastuktur JalanRaya" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Transportasi</label>
                                    <div class="col-sm-6">
                                        <input name="Transportasi" class="form-control" type="number" placeholder="Transportasi" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Aksebilitas</label>
                                    <div class="col-sm-6">
                                        <input name="Aksebilitas" class="form-control" type="number" placeholder="Aksebilitas" required />
                                    </div>
                                </div><div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Teknologi</label>
                                    <div class="col-sm-6">
                                        <input name="Teknologi" class="form-control" type="number" placeholder="Teknologi" required />
                                    </div>
                                </div><div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">TIK</label>
                                    <div class="col-sm-6">
                                        <input name="TIK" class="form-control" type="number" placeholder="TIK" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Internet</label>
                                    <div class="col-sm-6">
                                        <input name="Internet" class="form-control" type="number" placeholder="Internet" required />
                                    </div>
                                </div><div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Air Bersih</label>
                                    <div class="col-sm-6">
                                        <input name="Air_Bersih" class="form-control" type="number" placeholder="Air Bersih" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Bobot</label>
                                    <div class="col-sm-6">
                                        <input name="Bobot" class="form-control" type="number" placeholder="Bobot" required />
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label class="col-sm-2 col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                        <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />
                                    </div>
                                </div>
                                <div style="margin-top: 20px;"></div>
                            </form>


                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php include "footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>