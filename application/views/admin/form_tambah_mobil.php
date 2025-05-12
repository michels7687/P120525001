<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Form Input Data Mobil</h1>
		</div>

		<div class="card">
			<div class="card-body">

				<form action="<?= base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Tipe Mobil</label>
								<select name="kode_tipe" id="" class="form-control">
									<option value="">--Pilih Tipe Mobil--</option>
									<?php foreach ($tipe as $tp): ?>
										<option value="<?= $tp->kode_tipe ?>"><?= $tp->nama_tipe; ?></option>
									<?php endforeach; ?>
								</select>
								<?= form_error('kode_tipe', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">Merek</label>
								<input type="text" name="merek" class="form-control">
								<?= form_error('merek', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">Nomor Plat</label>
								<input type="text" name="no_plat" class="form-control">
								<?= form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">Warna</label>
								<input type="text" name="warna" class="form-control">
								<?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">AC</label>
								<select name="ac" id="" class="form-control">
									<option value="">--Pilih--</option>
									<option value="1">Tersedia</option>
									<option value="0">Tidak Tersedia</option>
								</select>
								<?= form_error('ac', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">Sopir</label>
								<select name="sopir" id="" class="form-control">
									<option value="">--Pilih--</option>
									<option value="1">Tersedia</option>
									<option value="0">Tidak Tersedia</option>
								</select>
								<?= form_error('sopir', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">MP3 Player</label>
								<select name="mp3_player" id="" class="form-control">
									<option value="">--Pilih--</option>
									<option value="1">Tersedia</option>
									<option value="0">Tidak Tersedia</option>
								</select>
								<?= form_error('mp3_player', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">Central Lock</label>
								<select name="central_lock" id="" class="form-control">
									<option value="">--Pilih--</option>
									<option value="1">Tersedia</option>
									<option value="0">Tidak Tersedia</option>
								</select>
								<?= form_error('central_lock', '<div class="text-small text-danger">', '</div>') ?>
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Harga Sewa perhari</label>
								<input type="number" name="harga" class="form-control">
								<?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">Denda</label>
								<input type="number" name="denda" class="form-control">
								<?= form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">Tahun</label>
								<input type="text" name="tahun" class="form-control">
								<?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">Status</label>
								<select name="status" id="" class="form-control">
									<option value="">--Pilih Status--</option>
									<option value="1">Tersedia</option>
									<option value="0">Tidak Tersedia</option>
								</select>
								<?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
							</div>

							<div class="form-group">
								<label for="">Gambar</label>
								<input type="file" name="gambar" class="form-control" accept="image/*">
							</div>

							<div class="row col-md-12 justify-content-md-end">
								<button type="reset" class="btn btn-lg btn-success shadow shadow-3 mt-4 mr-2"><i class="fas fa-sync"></i> Reset</button>
								<button type="submit" class="btn btn-lg btn-primary shadow shadow-3 mt-4"><i class="fas fa-save"></i> Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>


	</section>
</div>
