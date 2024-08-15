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
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Cluster</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Cluster</h6>
                        </div>
                        <div class="card-body">

                            <?php
                            include '../koneksi.php';
                            $id = $_GET['id'];
                            $query = mysqli_query($koneksi, "select * from cluster where id='$id'");
                            $data  = mysqli_fetch_array($query);
                            ?>

                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="edit_aksi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">ID</label>
                                        <div class="col-sm-8">
                                            <input name="id" type="text" id="id" class="form-control" value="<?php echo $data['id']; ?>" readonly />
                                            <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Desa</label>
                                        <div class="col-sm-8">
                                            <input name="desa" type="text" id="desa" class="form-control" value="<?php echo $data['desa']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Potensi</label>
                                        <div class="col-sm-8">
                                            <input name="potensi" class="form-control" id="potensi" type="text" value="<?php echo $data['potensi']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Program_Pembangunan</label>
                                        <div class="col-sm-8">
                                            <input name="program_pembangunan" class="form-control" id="program_pembangunan" type="text" value="<?php echo $data['program_pembangunan']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Pasar</label>
                                        <div class="col-sm-8">
                                            <input name="pasar" class="form-control" type="text" id="pasar" type="text" value="<?php echo $data['pasar']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Tenaga_Kerja</label>
                                        <div class="col-sm-8">
                                            <input name="tenaga_kerja" class="form-control" id="tenaga_kerja" type="text" value="<?php echo $data['tenaga_kerja']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Peluang_Usaha</label>
                                        <div class="col-sm-8">
                                            <input name="peluang_usaha" class="form-control" id="peluang_usaha" type="text" value="<?php echo $data['peluang_usaha']; ?>" required />
                                        </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Modal_Usaha</label>
                                        <div class="col-sm-8">
                                            <input name="modal_usaha" class="form-control" id="modal_usaha" type="text" value="<?php echo $data['modal_usaha']; ?>" required />
                                        </div> 
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Keterampilan_Masyarakat</label>
                                        <div class="col-sm-8">
                                            <input name="keterampilan_masyarakat" class="form-control" id="keterampilan_masyarakat" type="text" value="<?php echo $data['keterampilan_masyarakat']; ?>" required />
                                        </div>      
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Infrastruktur_JalanRaya</label>
                                        <div class="col-sm-8">
                                            <input name="infrastruktur_jalaraya" class="form-control" id="infrastruktur_jalaraya" type="text" value="<?php echo $data['infrastruktur_jalaraya']; ?>" required />
                                        </div>  
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Transportasi</label>
                                        <div class="col-sm-8">
                                            <input name="transportasi" class="form-control" id="transportasi" type="text" value="<?php echo $data['transportasi']; ?>" required />
                                        </div> 
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Aksebilitas</label>
                                        <div class="col-sm-8">
                                            <input name="aksebilitas" class="form-control" id="aksebilitas" type="text" value="<?php echo $data['aksebilitas']; ?>" required />
                                        </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Teknologi</label>
                                        <div class="col-sm-8">
                                            <input name="teknologi" class="form-control" id="teknologi" type="text" value="<?php echo $data['teknologi']; ?>" required />
                                        </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">TIK</label>
                                        <div class="col-sm-8">
                                            <input name="tik" class="form-control" id="tik" type="text" value="<?php echo $data['tik']; ?>" required />
                                        </div> 
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Internet</label>
                                        <div class="col-sm-8">
                                            <input name="internet" class="form-control" id="internet" type="text" value="<?php echo $data['internet']; ?>" required />
                                        </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Air_Bersih</label>
                                        <div class="col-sm-8">
                                            <input name="air_bersih" class="form-control" id="air_bersih" type="text" value="<?php echo $data['air_bersih']; ?>" required />
                                        </div>  
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Bobot</label>
                                        <div class="col-sm-8">
                                            <input name="bobot" class="form-control" id="bobot" type="text" value="<?php echo $data['bobot']; ?>" required />
                                        </div>   
                                    </div>
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-8">
                                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
                            </div>

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