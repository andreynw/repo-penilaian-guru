<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <!-- <h4 class="page-title"><?= $position ?></h4> -->
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
                        <a href="<?= base_url('kriteria') ?>">Kriteria</a>
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
                        <h4 class="card-title"><?= $position ?></h4>
                    </div>
                </div>
                <form method="post" action="">
                    <div class="card-body col-md-6">
                        <input type="text" name="idadmin" value="<?= $kriteria['id_kriteria'] ?>" hidden>
                        <div class="form-group">
                            <label for="kriteria" class="placeholder"><b>Nama Kriteria</b></label>
                            <div class="position-relative">
                                <input id="kriteria" name="kriteria" type="text" class="form-control" value="<?= $kriteria['nama_kriteria'] ?>">
                                <?= form_error('kriteria', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis" class="placeholder"><b>Jenis</b></label>
                            <div class="position-relative">
                                <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                                    <?php
                                    foreach ($jenis as $j) {
                                        if ($kriteria['jenis'] != $j) {
                                    ?>
                                            <option value="<?= $j ?>"><?= $j ?></option>
                                        <?php
                                        } else {
                                        ?>
                                            <option value="<?= $j ?>" selected><?= $j ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bobot" class="placeholder"><b>Bobot</b></label>
                            <div class="position-relative">
                                <select class="form-control" id="exampleFormControlSelect1" name="bobot">
                                    <?php
                                    foreach ($bobot as $b) {
                                        if ($kriteria['bobot'] != $b) {
                                    ?>
                                            <option value="<?= $b ?>"><?= $b ?></option>
                                        <?php
                                        } else {
                                        ?>
                                            <option value="<?= $b ?>" selected><?= $b ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="info" class="placeholder"><b>Info</b></label>
                            <div class="position-relative">
                                <textarea id="info" name="info" type="text" class="form-control" rows="3"><?= $kriteria['info'] ?></textarea>
                                <?= form_error('info', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="placeholder"><b>Keterangan</b></label>
                            <div class="position-relative">
                                <textarea id="keterangan" name="keterangan" type="text" class="form-control" rows="3"><?= $kriteria['keterangan'] ?></textarea>
                                <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <!-- Indikator Fields -->
                        <div class="form-group">
                            <label for="indikator1" class="placeholder"><b>Indikator 1</b></label>
                            <div class="position-relative">
                                <textarea id="indikator1" name="indikator1" type="text" class="form-control" rows="3"><?= $kriteria['indikator1'] ?></textarea>
                                <?= form_error('indikator1', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="indikator2" class="placeholder"><b>Indikator 2</b></label>
                            <div class="position-relative">
                                <textarea id="indikator2" name="indikator2" type="text" class="form-control" rows="3"><?= $kriteria['indikator2'] ?></textarea>
                                <?= form_error('indikator2', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="indikator3" class="placeholder"><b>Indikator 3</b></label>
                            <div class="position-relative">
                                <textarea id="indikator3" name="indikator3" type="text" class="form-control" rows="3"><?= $kriteria['indikator3'] ?></textarea>
                                <?= form_error('indikator3', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="indikator4" class="placeholder"><b>Indikator 4</b></label>
                            <div class="position-relative">
                                <textarea id="indikator4" name="indikator4" type="text" class="form-control" rows="3"><?= $kriteria['indikator4'] ?></textarea>
                                <?= form_error('indikator4', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="indikator5" class="placeholder"><b>Indikator 5</b></label>
                            <div class="position-relative">
                                <textarea id="indikator5" name="indikator5" type="text" class="form-control" rows="3"><?= $kriteria['indikator5'] ?></textarea>
                                <?= form_error('indikator5', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Are you sure want to edit?')">Ubah</button>
                        <a href="<?= base_url('kriteria') ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>