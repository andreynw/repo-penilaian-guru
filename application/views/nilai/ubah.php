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
                        <a href="<?= base_url('nilai') ?>">Nilai</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="">Ubah <?= $position ?></a>
                    </li>
                </ul>
            </div>
            <?php if ($this->session->flashdata('kosong')) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <h4><?= $this->session->flashdata('kosong'); ?></h4>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Ubah <?= $position ?> <?= $guru['0']['nama_guru'] ?></h4>
                    </div>
                </div>

                <form method="post" action="<?= base_url('nilai/simpan/') . $guru['0']['id_guru'] ?>">
                    <div class="card-body col-md-8">
                        <input type="text" name="idadmin" value="<?= $periode['id_periode'] ?>" hidden>

                        <!-- C1 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria[0]['info'] ?></p>
                            <label for="C1" class="placeholder"><b><?= $kriteria[0]['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria[0]['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria[0]['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria[0]['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria[0]['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria[0]['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C1" value="<?= $n['nilai'] ?>" <?php if ($guru[0]['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C2 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['1']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C2" class="placeholder"><b><?= $kriteria['1']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['1']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['1']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['1']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['1']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['1']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C2" value="<?= $n['nilai'] ?>" <?php if ($guru['1']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C3 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['2']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C3" class="placeholder"><b><?= $kriteria['2']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['2']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['2']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['2']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['2']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['2']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C3" value="<?= $n['nilai'] ?>" <?php if ($guru['2']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C4 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['3']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C4" class="placeholder"><b><?= $kriteria['3']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['3']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['3']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['3']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['3']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['3']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C4" value="<?= $n['nilai'] ?>" <?php if ($guru['3']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C5 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['4']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C5" class="placeholder"><b><?= $kriteria['4']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['4']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['4']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['4']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['4']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['4']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C5" value="<?= $n['nilai'] ?>" <?php if ($guru['4']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C6 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['5']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C6" class="placeholder"><b><?= $kriteria['5']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['5']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['5']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['5']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['5']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['5']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C6" value="<?= $n['nilai'] ?>" <?php if ($guru['5']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C7 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['6']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C7" class="placeholder"><b><?= $kriteria['6']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['6']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['6']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['6']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['6']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['6']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C7" value="<?= $n['nilai'] ?>" <?php if ($guru['6']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C8 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['7']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C8" class="placeholder"><b><?= $kriteria['7']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['7']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['7']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['7']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['7']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['7']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C8" value="<?= $n['nilai'] ?>" <?php if ($guru['7']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C9 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['8']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C9" class="placeholder"><b><?= $kriteria['8']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['8']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['8']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['8']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['8']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['8']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C9" value="<?= $n['nilai'] ?>" <?php if ($guru['8']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C10 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['9']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C10" class="placeholder"><b><?= $kriteria['9']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['9']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['9']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['9']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['9']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['9']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C10" value="<?= $n['nilai'] ?>" <?php if ($guru['9']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C11 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['10']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C11" class="placeholder"><b><?= $kriteria['10']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['10']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['10']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['10']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['10']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['10']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C11" value="<?= $n['nilai'] ?>" <?php if ($guru['10']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C12 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['11']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C12" class="placeholder"><b><?= $kriteria['11']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['11']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['11']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['11']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['11']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['11']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C12" value="<?= $n['nilai'] ?>" <?php if ($guru['11']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C13 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['12']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C13" class="placeholder"><b><?= $kriteria['12']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['12']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['12']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['12']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['12']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['12']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C13" value="<?= $n['nilai'] ?>" <?php if ($guru['12']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- C14 -->
                        <div class="form-group">
                            <p style="font-size: 1em; font-weight: bold;"><?= $kriteria['13']['info'] ?></p> <!-- Informasi tambahan ditambahkan di sini -->
                            <label for="C14" class="placeholder"><b><?= $kriteria['13']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <p id="indikator1" class="form-control-static"><?= $kriteria['13']['indikator1'] ?></p>
                                <p id="indikator2" class="form-control-static"><?= $kriteria['13']['indikator2'] ?></p>
                                <p id="indikator3" class="form-control-static"><?= $kriteria['13']['indikator3'] ?></p>
                                <p id="indikator4" class="form-control-static"><?= $kriteria['13']['indikator4'] ?></p>
                                <p id="indikator5" class="form-control-static"><?= $kriteria['13']['indikator5'] ?></p>
                                <?php foreach ($nilai as $n) { ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C14" value="<?= $n['nilai'] ?>" <?php if ($guru['13']['nilai_guru'] == $n['nilai']) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $n['nilai'] ?> - <?= $n['info1'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="card-action">
                            <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Are you sure want to edit?')">Ubah</button>
                            <a href=" <?= base_url('nilai') ?>" class="btn btn-danger">Batal</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>