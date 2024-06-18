<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <!-- <h4 class="page-title">Data <?= $position ?></h4> -->
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
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $position ?></h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 6%">No</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Bobot</th>
                                    <th>Info</th>
                                    <th>Keterangan</th>
                                    <th>Indikator1</th>
                                    <th>Indikator2</th>
                                    <th>Indikator3</th>
                                    <th>Indikator4</th>
                                    <th>Indikator5</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kriteria as $k) {
                                ?>
                                    <tr>

                                        <td><?= $no ?></td>
                                        <td><?= $k['nama_kriteria'] ?></td>
                                        <td><?= $k['jenis'] ?></td>
                                        <td><?= $k['bobot'] ?></td>
                                        <td><?= $k['info'] ?></td>
                                        <td><?= $k['keterangan'] ?></td>
                                        <td><?= $k['indikator1'] ?></td>
                                        <td><?= $k['indikator2'] ?></td>
                                        <td><?= $k['indikator3'] ?></td>
                                        <td><?= $k['indikator4'] ?></td>
                                        <td><?= $k['indikator5'] ?></td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="<?= base_url('kriteria/ubah/') . $k['id_kriteria'] ?>" class="btn btn-link btn-primary">
                                                    <i class="fas fa-edit">Ubah</i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $no = $no + 1;
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