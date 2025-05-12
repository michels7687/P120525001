<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Customer</h1>
		</div>

		<?= $this->session->flashdata('pesan'); ?>

		<div class="row col-md-12 justify-content-md-end">
			<a href="<?= base_url('admin/data_customer/tambah_customer'); ?>" class="btn btn-primary shadow mb-3"><i class="fa fa-plus"></i> Tambah Customer</a>
		</div>

		<?php echo form_open('admin/data_customer/search') ?>
		<ul class="navbar-nav mr-3 d-none">
			<input class="form-control" autocomplete="off" data-width="250" type="text" name="keyword" placeholder="search">
			<li style="margin-top: -4.5vh;margin-left: 31vh;"><input class="btn btn-primary mb-3" type="submit" name="search_submit" value="Cari"></li>
		</ul>

		<?php echo form_close() ?>

		<table id="tabel-data" class="table-data table table-striped table-bordered" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Alamat</th>
					<th>Gender</th>
					<th>No. Telepon</th>
					<th>No. KTP</th>
					<!-- <th>Password</th> -->
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($customer as $cs): ?>
					<tr>
						<td><?= $no++; ?>.</td>
						<td><?= $cs->nama; ?></td>
						<td><?= $cs->username; ?></td>
						<td><?= $cs->alamat; ?></td>
						<td><?= $cs->gender; ?></td>
						<td><?= $cs->no_telepon; ?></td>
						<td><?= $cs->no_ktp; ?></td>
						<!-- <td><?= $cs->password; ?></td> -->
						<td>
							<a href="<?= base_url('admin/data_customer/update_customer/') . $cs->id_customer; ?>" class="btn btn-sm shadow btn-primary"><i class="fas fa-edit"></i></a>
							<a href="<?= base_url('admin/data_customer/delete_customer/') . $cs->id_customer; ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-sm shadow btn-danger"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>

		</table>
	</section>
</div>
