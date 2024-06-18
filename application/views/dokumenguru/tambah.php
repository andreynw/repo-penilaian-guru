<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tambah Dokumen Guru</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url(); ?>assets/img/icon.ico" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="<?= base_url(); ?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['<?= base_url(); ?>assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/azzara.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo.css">
</head>

<body>
    <div class="wrapper">

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="<?= base_url('admin') ?>">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href=""><?= $position ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Tambah Dokumen Guru</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url('dokumenguru/simpan'); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Nama Guru</label>
                                            <input name="nama_guru" type="text" class="form-control" placeholder="Nama Guru" required>
                                        </div>
                                        <?= form_error('nama_guru', '<small class="text-danger">', '</small>'); ?>
                                        <div class="form-group form-group-default">
                                            <label>NIP</label>
                                            <input name="nip" type="text" class="form-control" placeholder="NIP" required>
                                        </div>
                                        <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
                                        <div class="form-group form-group-default">
                                            <label>Syarat Bukti Modul</label>
                                            <input name="syarat_bukti_modul" type="file" class="form-control" required>
                                        </div>
                                        <?= form_error('syarat_bukti_modul', '<small class="text-danger">', '</small>'); ?>
                                        <div class="form-group form-group-default">
                                            <label>Syarat Bukti RPP</label>
                                            <input name="syarat_bukti_rpp" type="file" class="form-control" required>
                                        </div>
                                        <?= form_error('syarat_bukti_rpp', '<small class="text-danger">', '</small>'); ?>
                                        <div class="form-group form-group-default">
                                            <label>Syarat Bukti Silabus</label>
                                            <input name="syarat_bukti_silabus" type="file" class="form-control" required>
                                        </div>
                                        <?= form_error('syarat_bukti_silabus', '<small class="text-danger">', '</small>'); ?>
                                        <div class="form-group form-group-default">
                                            <label>Syarat Bukti ATP</label>
                                            <input name="syarat_bukti_atp" type="file" class="form-control" required>
                                        </div>
                                        <?= form_error('syarat_bukti_atp', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <a href="<?= base_url('dokumenguru') ?>" class="btn btn-danger">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>