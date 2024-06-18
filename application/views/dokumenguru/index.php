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
            <?php if ($this->session->flashdata('done')) { ?>
                <div class="alert alert-success alert-dismissable" id="close_alert">
                    <h4><?= $this->session->flashdata('done'); ?></h4>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title"><?= $position ?></h4>
                        <button class="btn btn-primary btn-round ml-auto" onclick="window.location.href='<?= base_url('dokumenguru/tambah'); ?>'">
                            <i class="fa fa-plus"></i>
                            Tambah <?= $position ?>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover table-custom"> <!-- Menambahkan kelas CSS table-custom -->
                            <thead>
                                <tr>
                                    <th style="width: 6%">No</th>
                                    <th>Nama Guru</th>
                                    <th>NIP</th>
                                    <th>Syarat Bukti Modul</th>
                                    <th>Syarat Bukti RPP</th>
                                    <th>Syarat Bukti Silabus</th>
                                    <th>Syarat Bukti ATP</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dokumen_guru as $dokumen) {
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $dokumen->nama_guru ?></td>
                                        <td><?= $dokumen->nip ?></td>

                                        <td>
                                            <?php if ($dokumen->syarat_bukti_modul) { ?>
                                                <a href="<?= base_url('gambar2/') . $dokumen->syarat_bukti_modul ?>" target="_blank">Lihat File Modul</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($dokumen->syarat_bukti_rpp) { ?>
                                                <a href="<?= base_url('gambar2/') . $dokumen->syarat_bukti_rpp ?>" target="_blank">Lihat File RPP</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($dokumen->syarat_bukti_silabus) { ?>
                                                <a href="<?= base_url('gambar2/') . $dokumen->syarat_bukti_silabus ?>" target="_blank">Lihat File Silabus</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($dokumen->syarat_bukti_atp) { ?>
                                                <a href="<?= base_url('gambar2/') . $dokumen->syarat_bukti_atp ?>" target="_blank">Lihat File ATP</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="<?= base_url('dokumenguru/ubah/') . $dokumen->id ?>" class="btn btn-link btn-primary">
                                                    <i class="fas fa-edit"> Ubah</i>
                                                </a>
                                                <a href="<?= base_url('dokumenguru/hapus/') . $dokumen->id ?>" class="btn btn-link btn-danger" onclick="return confirm('Are you sure want to delete?')">
                                                    <i class="fas fa-times">Hapus</i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>