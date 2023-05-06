	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data mahasiswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">mahasiswa</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<a href="<?= base_url() ?>mahasiswa/add" class="btn btn-primary btn-sm btntambahkriteria"><i class="fa fa-plus"></i> Tambah Data</a>
						</div>

						<div class="card-body">
							<?php
							echo validation_errors('<div class="alert alert-danger alert-dismissible">','</div>');
							if ($this->session->flashdata('success'))
							{
								echo '<div class="alert alert-success alert-dismissible " role="alert">';
								echo $this->session->flashdata('success');
								echo '</div>';
							}
							if ($this->session->flashdata('error'))
							{
								echo '<div class="alert alert-danger alert-dismissible " role="alert">';
								echo $this->session->flashdata('error');
								echo '</div>';
							}
							?>

							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK </th>
										<th>Nama </th>
										<th>Alamat </th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>Kewarganegaraan</th>
										<th>Agama</th>
										<th>Nama Ibu Kandung</th>
										<th>Email</th>
										<th>No Telp</th>
										<th>Kode Pos</th>
										<th>Provinsi</th>
										<th>Kabupaten</th>
										<th>Kecamatan</th>
										<th>Pendidikan Terakhir</th>
										<th>Nama Sekolah</th>
										<th>Rata-rata Nilai Rapor</th>
										<th>Programstudi 1</th>
										<th>Programstudi 2</th>
										<th>Foto Mahasiswa</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ ?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->nik_mahasiswa ?></td>
											<td><?= $row->nama_mahasiswa ?></td>
											<td><?= $row->alamat_mahasiswa ?></td>
											<td><?= $row->tempatlahir_mahasiswa ?></td>
											<td><?= $row->tgllahir_mahasiswa ?></td>
											<td><?= $row->jeniskelamin_mahasiswa ?></td>
											<td><?= $row->kewarganegaraan_mahasiswa ?></td>
											<td><?= $row->agama_mahasiswa ?></td>
											<td><?= $row->nmibukandung_mahasiswa ?></td>
											<td><?= $row->email_mahasiswa ?></td>
											<td><?= $row->notelp_mahasiswa ?></td>
											<td><?= $row->kodepos_mahasiswa ?></td>
											<td><?= $row->nama_provinsi ?></td>
											<td><?= $row->nama_kabupaten ?></td>
											<td><?= $row->nama_kecamatan ?></td>
											<td><?= $row->pendidikanterakhir_mahasiswa ?></td>
											<td><?= $row->nmsekolah_mahasiswa ?></td>
											<td><?= $row->rataratarapor_mahasiswa ?></td>
											<td><?= $row->programstudi1_mahasiswa ?></td>
											<td><?= $row->programstudi2_mahasiswa ?></td>
											<td>
												<img src="<?= base_url()?>/public/image/upload/mahasiswa/<?= $row->foto_mahasiswa ?>" style="width: 80px; height: 100px;">
											</td>
											<td>

												<a href="<?= base_url(); ?>mahasiswa/edit/<?= $row->id_mahasiswa ?>" type="submit" class="btn btn-warning" ><i class="icofont icofont-edit"></i> Edit</a>


												<a type="submit" class="btn btn-danger btnhapus" data-id="<?= $row->id_mahasiswa ?>" style="color: white;"><i class="icofont icofont-trash"></i> Hapus</a>

											</td>
                                        </tr>
                                    <?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>