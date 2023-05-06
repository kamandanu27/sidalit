	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data siswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">siswa</li>
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
							<a href="<?= base_url() ?>siswa/add" class="btn btn-primary btn-sm btntambahkriteria"><i class="fa fa-plus"></i> Tambah Data</a>
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
										<th>Nisn </th>
										<th>Nama </th>
										<th>Alamat </th>
										<th>Provinsi</th>
										<th>Kabupaten</th>
										<th>Kecamatan</th>
										<th>Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>Jurusan</th>
										<th>Kelas</th>
										<th>Ekstrakulikuler</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ ?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->nisn_siswa ?></td>
											<td><?= $row->nama_siswa ?></td>
											<td><?= $row->alamat_siswa ?></td>
											<td><?= $row->nama_provinsi ?></td>
											<td><?= $row->nama_kabupaten ?></td>
											<td><?= $row->nama_kecamatan ?></td>
											<td><?= $row->tgllahir_siswa ?></td>
											<td><?= $row->jenis_kelamin_siswa ?></td>
											<td><?= $row->nama_jurusan ?></td>
											<td><?= $row->nama_kelas ?></td>
											<td><?= $row->nama_ekskul ?></td>
											
											<td>

												<a href="<?= base_url(); ?>siswa/edit/<?= $row->id_siswa ?>" type="submit" class="btn btn-warning" ><i class="icofont icofont-edit"></i> Edit</a>


												<a type="submit" class="btn btn-danger btnhapus" data-id="<?= $row->id_siswa ?>" style="color: white;"><i class="icofont icofont-trash"></i> Hapus</a>

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