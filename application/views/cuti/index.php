<div class="col-12">
	<?php if ($this->session->flashdata('alert') == 'berhasil_tambah') { ?>
		<div class="alert alert-primary alert-dismissible show fade">
			<div class="alert-body">
				<button class="close" data-dismiss="alert">
					<span>&times;</span>
				</button>
				Berhasil Mengajukan Cuti
			</div>
		</div>
	<?php } elseif ($this->session->flashdata('alert') == 'berhasil_setuju') { ?>
		<div class="alert alert-primary alert-dismissible show fade">
			<div class="alert-body">
				<button class="close" data-dismiss="alert">
					<span>&times;</span>
				</button>
				Berhasil Menyetujui
			</div>
		</div>
	<?php } elseif ($this->session->flashdata('alert') == 'berhasil_hapus') { ?>
		<div class="alert alert-danger alert-dismissible show fade">
			<div class="alert-body">
				<button class="close" data-dismiss="alert">
					<span>&times;</span>
				</button>
				Berhasil Menghapus Data
			</div>
		</div>
	<?php } ?>
	<div class="card">
		<div class="card-header">
			<h4>Data Pengajuan Cuti</h4>
		</div>
		<div class="card-body">
			<?php if (strpos($this->session->userdata('user_level'), 'pegawai') === false): ?>

			<?php else: ?>
				<a href="<?php echo base_url('cuti/tambah') ?>" class="btn btn-primary">Tambah</a>
				<hr>
			<?php endif;
			?>
			<div class="table-responsive">
				<table class="table table-striped table-responsive" id="table-1">
					<thead>
					<tr>
						<th class="text-center">
							No
						</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Jenis Cuti</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Selesai</th>
						<th>Selama</th>
						<th>Alasan Cuti</th>
						<th>Tanggal di Buat</th>
						<th>Alamat</th>
						<th>Status Pimpinan</th>
						<th>Status Kepala Bidang</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($cuti as $key => $value): ?>
						<?php if ($value['pegawai_id'] == $this->session->userdata('user_pegawai_id')): ?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $value['pegawai_nip'] ?></td>
								<td><?php echo $value['pegawai_nama'] ?></td>
								<td><?php echo $value['cuti_jenis'] ?></td>
								<td><?php echo $value['cuti_tgl_mulai'] ?></td>
								<td><?php echo $value['cuti_tgl_selesai'] ?></td>
								<?php
								$tglmulai = new DateTime($value['cuti_tgl_mulai']);
								$tglselesai = new DateTime($value['cuti_tgl_selesai']);
								$diff = $tglselesai->diff($tglmulai);
								?>
								<td><?php echo $diff->d . " Hari" ?></td>
								<td><?php echo $value['cuti_alasan'] ?></td>
								<td><?php echo $value['cuti_tanggal_dibuat'] ?></td>
								<td><?php echo $value['pegawai_alamat'] ?></td>
								<td><?php echo $value['cuti_status_pimpinan'] ?></td>
								<td><?php echo $value['cuti_status_kepala_bidang'] ?></td>
							</tr>
						<?php else: ?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $value['pegawai_nip'] ?></td>
								<td><?php echo $value['pegawai_nama'] ?></td>
								<td><?php echo $value['cuti_jenis'] ?></td>
								<td><?php echo $value['cuti_tgl_mulai'] ?></td>
								<td><?php echo $value['cuti_tgl_selesai'] ?></td>
								<?php
								$tglmulai = new DateTime($value['cuti_tgl_mulai']);
								$tglselesai = new DateTime($value['cuti_tgl_selesai']);
								$diff = $tglselesai->diff($tglmulai);
								?>
								<td><?php echo $diff->d . " Hari" ?></td>
								<td><?php echo $value['cuti_alasan'] ?></td>
								<td><?php echo $value['cuti_tanggal_dibuat'] ?></td>
								<td><?php echo $value['pegawai_alamat'] ?></td>
								<td>
									<?php echo $value['cuti_status_pimpinan'] ?>

									<?php if (strpos($this->session->userdata('user_level'), 'pegawai') == false):
										if ($this->session->userdata('user_level') == 'pimpinan'):
											if ($value['cuti_status_pimpinan'] == 'belum'):
												?>
												<a type="button" class="btn btn-primary"
												   href="<?php echo base_url("cuti/setujui_pimpinan/" . $value['pegawai_id']) ?>">Setujui</a>
											<?php
											endif;
										endif;
									endif; ?>
								</td>
								<td>
									<?php echo $value['cuti_status_kepala_bidang'] ?>

									<?php if (strpos($this->session->userdata('user_level'), 'pegawai') == false):
										if ($value['cuti_status_kepala_bidang'] == 'belum'):
											?>
											<a type="button" class="btn btn-primary"
											   href="<?php echo base_url("cuti/setujui_kabid/" . $value['pegawai_id']) ?>">Setujui</a>
										<?php
										endif;
									endif; ?>
								</td>
							</tr>
						<?php endif; ?>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
