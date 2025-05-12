<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Mobil</h1>
		</div>

		<?= $this->session->flashdata('pesan'); ?>

		<?php echo form_open('admin/Data_mobil/search') ?>
		<div class="row col-md-12 justify-content-md-end">
			<a href="<?= base_url('admin/data_mobil/tambah_mobil'); ?>" class="btn btn-primary mb-3 shadow shadow-3"><i class="fas fa-plus"></i> Tambah Data</a>
		</div>
		<ul class="navbar-nav mr-3 d-none">
			<input class="form-control" autocomplete="off" data-width="250" type="text" name="keyword" placeholder="search">
			<li style="margin-top: -4.5vh;margin-left: 31vh;"><input class="btn btn-primary mb-3" type="submit" name="search_submit" value="Cari"></li>
		</ul>

		<?php echo form_close() ?>
		<table class="table-data table table-striped table-bordered" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>Tipe</th>
					<th>Tahun</th>
					<th>Merek</th>
					<th>Nomor Plat</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($mobil as $mb): ?>
					<tr>
						<td><?= $no++; ?>.</td>
						<td>
							<img width="70px;" src="<?= base_url('assets/upload/') . $mb->gambar; ?>" alt="">
						</td>
						<td><?= $mb->kode_tipe; ?></td>
						<td><?= $mb->tahun; ?></td>
						<td><?= $mb->merek; ?></td>
						<td><?= $mb->no_plat; ?></td>
						<td>
							<?php if ($mb->status == 0) { ?>
								<span class="badge badge-danger shadow shadow-3">Tidak Tersedia</span>
							<?php } else { ?>
								<span class="badge badge-primary shadow shadow-3">Tersedia</span>
							<?php } ?>
						</td>
						<td>
							<a href="<?= base_url('admin/data_mobil/detail_mobil/') . $mb->id_mobil; ?>" class="btn btn-sm shadow shadow-3 btn-success"><i class="fas fa-eye"></i></a>
							<a href="<?= base_url('admin/data_mobil/update_mobil/') . $mb->id_mobil; ?>" class="btn btn-sm shadow shadow-3 btn-primary"><i class="fas fa-edit"></i></a>
							<a onclick="return confirm('Yakin hapus?')" href="<?= base_url('admin/data_mobil/delete_mobil/') . $mb->id_mobil; ?>" class="btn btn-sm shadow shadow-3 btn-danger"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<br />
		</nav>
	</section>
</div>
