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
<style>
	.card-hover-wrapper {
		position: relative;
		overflow: hidden;
	}

	.card-hover-overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(255, 165, 0, 0.9);
		/* orange semi transparan */
		display: flex;
		justify-content: center;
		align-items: center;
		gap: 20px;
		flex-direction: column;
		opacity: 0;
		transition: 0.3s ease;
		z-index: 10;
	}

	.card-hover-wrapper:hover .card-hover-overlay {
		opacity: 1;
	}

	.card-hover-overlay a {
		padding: 10px 20px;
		background-color: white;
		color: orange;
		border: none;
		text-decoration: none;
		border-radius: 5px;
		font-weight: bold;
		transition: 0.2s;
	}

	.card-hover-overlay a:hover {
		background-color: #ffcc80;
		color: #000;
	}

	.blog-posts .blog-post {
		margin-bottom: 0px;
	}
</style>

<div style="height: 40px;"></div>

<section class="blog-posts grid-system">
	<div class="container">
		<div class="container">
			<h3>
				<center>Silahkan Memilih Mobil<center>
			</h3>
			<br>
			<div class="row">

			</div>
		</div>
		<br>
		<br>
		<?= $this->session->flashdata('pesan'); ?>
		<div class="all-blog-posts">
			<div class="row">

				<?php foreach ($mobil as $mb): ?>
					<div class="col-md-4 col-sm-6 mt-2" style="cursor: pointer;">
						<div class="card-hover-wrapper">
							<div class="card-hover-overlay">
								<?php if ($mb->status == "1") { ?>
									<a href="<?= base_url('customer/rental/tambah_rental/' . $mb->id_mobil) ?>" class="text-center" style="min-width: 120px;"><i class="fa fa-car"></i> Rental</a>
								<?php } ?>
								<a href="<?= base_url('customer/data_mobil/detail_mobil/' . $mb->id_mobil) ?>" class="text-center" style="min-width: 120px;"><i class="fa fa-info-circle"></i> Detail</a>
							</div>
							<div class="blog-post" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
								<div class="blog-thumb">
									<img src="<?= base_url('assets/upload/') . $mb->gambar ?>" alt="" style="height: 300px;">
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