<!-- Page Content -->
<!-- Banner Starts Here -->
<!-- <div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>Fleet</h4>
            <h2>Choose from our fleet!</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div> -->

<!-- Banner Ends Here -->

<div style="height: 40px;"></div>

<section class="blog-posts grid-system">
	<div class="container">
		<div class="container">

			<?php foreach ($mobil as $mb): ?>
				<h3>
					<center>Mobil Tipe <?= $mobil->kode_tipe ?> <center>
				</h3>
				<br>
				<div class="row">
				<?php endforeach; ?>

				<div class="col-md-4 col-sm-6">
					<div class="blog-post">
						<div class="blog-thumb">
						</div>
						<div class="down-content">
							<a href="<?= base_url('customer/data_mobil/kategori/') . $mb->merek; ?>">
								<h4></h4>
							</a>
						</div>
					</div>
				</div>


				</div>
		</div>
		<br>
		<br>
		<?= $this->session->flashdata('pesan'); ?>
		<div class="all-blog-posts">
			<div class="row">

				<?php foreach ($data as $mb): ?>
					<div class="col-md-4 col-sm-6">
						<div class="blog-post">
							<div class="blog-thumb">
								<img src="<?= base_url('assets/upload/') . $mb->gambar ?>" alt="" style="height: 200px; width: 200px">
							</div>
							<div class="down-content">
								<a href="offers.html">
									<h4><?= $mb->merek; ?></h4>
								</a>
								<span>Rp. <?= number_format($mb->harga, 0, ',', '.'); ?>,-</span> <strong>per hari</strong>

								<div class="row">
									<?php if ($mb->ac == '1') { ?>
										<a href="#" class="badge badge-success m-1"><i class="fa fa-check-square"></i> AC</a>
									<?php } else { ?>
										<a href="#" class="badge badge-danger m-1"><i class="fa fa-times-circle"></i> AC</a>
									<?php } ?>

									<?php if ($mb->sopir == '1') { ?>
										<a href="#" class="badge badge-success m-1"><i class="fa fa-check-square"></i> Sopir</a>
									<?php } else { ?>
										<a href="#" class="badge badge-danger m-1"><i class="fa fa-times-circle"></i> Sopir</a>
									<?php } ?>

									<?php if ($mb->mp3_player == '1') { ?>
										<a href="#" class="badge badge-success m-1"><i class="fa fa-check-square"></i> PM3 Player</a>
									<?php } else { ?>
										<a href="#" class="badge badge-danger m-1"><i class="fa fa-times-circle"></i> MP3 Player</a>
									<?php } ?>

									<?php if ($mb->central_lock == '1') { ?>
										<a href="#" class="badge badge-success m-1"><i class="fa fa-check-square"></i> Central Lock</a>
									<?php } else { ?>
										<a href="#" class="badge badge-danger m-1"><i class="fa fa-times-circle"></i> Central Lock</a>
									<?php } ?>
								</div>

								<div class="post-options">
									<div class="row">
										<div class="col-lg-12">
											<ul class="post-tags">
												<li><i class="fa fa-bullseye"></i></li>
												<?php
												if ($mb->status == "1") { ?>
													<a href="<?= base_url('customer/rental/tambah_rental/' . $mb->id_mobil) ?>"> Rental</a></li>
												<?php } else { ?>
													<a href="#" style="color: black;"> Tidak Tersedia</a></li>
												<?php } ?>

												<li><a href="<?= base_url('customer/data_mobil/detail_mobil/' . $mb->id_mobil) ?>"> | Detail</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
</section>

<div style="height: 180px;"></div>