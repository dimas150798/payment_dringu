<div id="layoutSidenav_content">
    <main>

        <div class="menuatas">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6">
                    <img src="<?php echo base_url(); ?>vendor/bootstrap-icons/icons/list.svg" alt="Bootstrap" ...> <b class="fw-bold fs-4">Pembayaran Pelanggan</b>
                </div>
                <div class="col-12 col-xl-auto mt-2">
                    <a class="btn bg-danger text-white" onclick="history.back()"><img src="<?php echo base_url(); ?>vendor/bootstrap-icons/icons/backspace-fill.svg" alt="Bootstrap" ...> Kembali
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card mb-3 mt-3">
                <div class="card-header bg-primary fw-bold fs-5 text-white">
                    <i class="fas fa-table me-1"></i>
                    Data Pelanggan
                </div>
                <div class="card-body">
                    <div class="container">

                        <?php foreach ($DataPelanggan as $data) : ?>
                            <form method="POST" action="<?php echo base_url('admin/BelumLunas/C_PayBelumLunas/PaymentSave') ?>">

                                <div class="row">
                                    <div class="col-12">
                                        <input type="hidden" class="form-control bg-warning fw-bold" name="id" value="<?php echo $data['id'] ?>" readonly>
                                        <input type="hidden" class="form-control bg-warning fw-bold" name="id_pppoe" value="<?php echo $data['id_pppoe'] ?>" readonly>
                                        <input type="hidden" class="form-control bg-warning fw-bold" name="nama_paket" value="<?php echo $data['nama_paket'] ?>" readonly>
                                        <input type="hidden" class="form-control bg-warning fw-bold" name="gross_amount" value="<?php echo $data['harga_paket'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-lg-3 mt-4">
                                        <label for="order_id" class="form-label fw-bold fs-5" style="font-weight: bold;"> Order ID : <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-warning fw-bold" name="order_id" id="order_id" value="<?php echo $this->M_BelumLunas->invoice() ?>" readonly>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 mt-4">
                                        <label for="name" class="form-label fw-bold fs-5" style="font-weight: bold;"> Nama Customer : <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-warning fw-bold" name="name" id="name" value="<?php echo $data['name'] ?>" readonly>

                                    </div>
                                    <div class="col-sm-12 col-lg-3 mt-4">
                                        <label for="name_pppoe" class="form-label fw-bold fs-5" style="font-weight: bold;"> Name PPPOE : <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-warning fw-bold" name="name_pppoe" id="name_pppoe" value="<?php echo $data['name_pppoe'] ?>" readonly>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 mt-4">
                                        <label for="" class="form-label fw-bold fs-5" style="font-weight: bold;"> Paket Internet : <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-warning fw-bold" name="" id="" value="<?php echo $data['nama_paket'] ?> / Rp. <?php echo number_format($data['harga_paket'], 0, ',', '.') ?> + PPN" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-lg-3 mt-4">
                                        <label for="transaction_time" class="form-label fw-bold fs-5" style="font-weight: bold;"> Tanggal Jatuh Tempo : <span class="text-danger">*</span></label>
                                        <input type="datetime" class="form-control bg-warning fw-bold" name="transaction_time" id="transaction_time" value="<?php echo $Tanggal ?>" readonly>
                                        <div class="bg-danger">
                                            <small class="text-white"><?php echo form_error('transaction_time'); ?></small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 mt-4">
                                        <label for="biaya_admin" class="form-label fw-bold fs-5" style="font-weight: bold;"> Biaya Admin : <span class="text-danger">*</span></label>
                                        <select id="biaya_admin" name="biaya_admin" class="form-control fw-bold" required>
                                            <option value="">--- Pilih Biaya Admin ---</optxion>
                                            <option value="0">Rp. 0</option>
                                            <option value="5000">RP. 5000</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 mt-4">
                                        <label for="nama_admin" class="form-label fw-bold fs-5" style="font-weight: bold;"> Pembayaran Melalui : <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control fw-bold" name="nama_admin" id="nama_admin" value="" placeholder="Masukkan Pembayaran Melalui...">
                                        <div class="bg-danger">
                                            <small class="text-white"><?php echo form_error('nama_admin'); ?></small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 mt-4">
                                        <label for="keterangan" class="form-label fw-bold fs-5" style="font-weight: bold;"> Keterangan :</label>
                                        <input type="text" class="form-control fw-bold" name="keterangan" id="keterangan" value="" placeholder="Masukkan Keterangan...">
                                        <div class="bg-danger">
                                            <small class="text-white"><?php echo form_error('keterangan'); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success mt-2 justify-content-end"> Simpan</button>
                                    </div>
                                </div>

                            </form>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>

    </main>