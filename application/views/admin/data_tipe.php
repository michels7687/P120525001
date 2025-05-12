<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Tipe Mobil</h1>
		</div>

		<?= $this->session->flashdata('pesan'); ?>

		<div class="row col-md-12 justify-content-md-end">
			<a href="<?= base_url('admin/data_tipe/tambah_tipe'); ?>" class="btn btn-primary btn-md shadow mb-3"><i class="fas fa-plus"></i> Tambah Data</a>
		</div>

		<table id="tabel-data" class="table-data table table-stripped table-bordered table-hover">
			<thead>
				<tr>
					<th width="20px;">No</th>
					<th>Kode Tipe</th>
					<th>Nama Tipe</th>
					<th width="180px;"></th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($tipe as $tp): ?>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $tp->kode_tipe; ?></td>
						<td><?= $tp->nama_tipe; ?></td>
						<td>
							<a href="<?= base_url('admin/data_tipe/update_tipe/') . $tp->id_tipe; ?>" class="btn btn-sm shadow btn-primary"><i class="fas fa-edit"></i></a>
							<a onclick="confirm('Yakin hapus?')" href="<?= base_url('admin/data_tipe/delete_tipe/') . $tp->id_tipe; ?>" class="btn btn-sm shadow btn-danger"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</section>
</div>
