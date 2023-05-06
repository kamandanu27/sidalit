	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data kelas</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">kelas</li>
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
							<h3> Tambah Data kelas </h3>
						</div>

						<form action="<?php echo base_url() ?>kelas/insert" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kelas</label>
                                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Guru</label>
                                    <select id="id_guru" name="id_guru" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($guru as $row){ ?>
											<option value="<?= $row->id_guru ?>"><?= $row->nama_guru ?></option>
										<?php } ?>
									</select>
                                </div>
                                


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>