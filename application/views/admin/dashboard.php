<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-envelope fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $jumlah_surat['surat_masuk'] ?></div>
                        <div>Surat Masuk</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url('home/surat_masuk') ?>" style="color:#337ab7">
                <div class="panel-footer">
                    <span class="pull-left">Daftar Surat Masuk</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-envelope fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $jumlah_surat['surat_keluar'] ?></div>
                        <div>Surat Keluar</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url('home/surat_keluar') ?>">
                <div class="panel-footer">
                    <span class="pull-left">Daftar Surat Keluar</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-mail-forward fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $jumlah_disposisi['disposisi_keluar'] ?></div>
                        <div>Daftar Disposisi Keluar</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url('home/disposisi_keluar') ?>" style="color:#337ab7">
                <div class="panel-footer">
                    <span class="pull-left">Daftar Disposisi Keluar</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-mail-reply fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $jumlah_disposisi['disposisi_masuk'] ?></div>
                        <div>Daftar Disposisi Masuk</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url('home/disposisi_masuk') ?>">
                <div class="panel-footer">
                    <span class="pull-left">Daftar Disposisi Masuk</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- tabel disposisi -->
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No.</th>
                <th>Unit Pengirim</th>
                <th>Nama Pengirim</th>
                <th>Tanggal Disposisi</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data_disposisi_masuk)) {
                $no = 0;
                foreach ($data_disposisi_masuk as $disposisi_masuk) {
                    echo '
                            <tr>
                                <td class="text-center" style="vertical-align: middle;">' . ++$no . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $disposisi_masuk->nama_jabatan . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $disposisi_masuk->nama_pegawai . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $disposisi_masuk->tgl_disposisi . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $disposisi_masuk->keterangan . '</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a href="' . base_url('/uploads/' . $disposisi_masuk->file_surat) . '" class="btn btn-sm btn-success" style="width: 100%">Lihat Surat</a><br>
                                    <a href="' . base_url('home/disposisi_keluar_pegawai/' . $disposisi_masuk->id_surat) . '" class="btn btn-sm btn-info" style="width: 100%; margin-top: 5%">Tambah Disposisi</a>
                                </td>
                            </tr>
                            ';
                }
            }
            ?>
        </tbody>
    </table>
</div>

<!-- /.row -->