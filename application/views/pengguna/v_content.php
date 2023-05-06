	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data pengguna</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">pengguna</li>
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
							<a href="<?= base_url() ?>pengguna/add" class="btn btn-primary btn-sm btntambahkriteria"><i class="fa fa-plus"></i> Tambah Data</a>
						</div>

						<div class="card-body">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>User Name</th>
										<th>Password</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ ?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->nama_pengguna ?></td>
											<td><?= $row->username_pengguna ?></td>
											<td><?= $row->password_pengguna ?></td>
											<td>

												<a href="<?= base_url(); ?>pengguna/edit/<?= $row->id_pengguna ?>" type="submit" class="btn btn-warning" ><i class="icofont icofont-edit"></i> Edit</a>

												<a href="<?= base_url(); ?>pengguna/delete/<?= $row->id_pengguna ?>" type="submit" class="btn btn-danger" ><i class="icofont icofont-trash"></i> Hapus</a>

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