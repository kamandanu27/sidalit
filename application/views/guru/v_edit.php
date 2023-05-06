	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data guru</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">guru</li>
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
							<h3> edit Data guru </h3>
						</div>

						<form action="<?php echo base_url() ?>guru/update" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama guru</label>
                                    <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?= $detail['nama_guru'] ?>">
									<input type="hidden" class="form-control" id="id_guru" name="id_guru" value="<?= $detail ['id_guru']?>">
									
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" id="alamat_guru" name="alamat_guru" value="<?= $detail['alamat_guru'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Hp</label>
                                    <input type="number" class="form-control" id="no_hp_guru" name="no_hp_guru" value="<?= $detail['no_hp_guru'] ?>">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" id="email_guru" name="email_guru" value="<?= $detail['email_guru'] ?>">
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