	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data kecamatan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">kecamatan</li>
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
							<h3> Tambah Data kecamatan </h3>
						</div>

						<form action="<?php echo base_url() ?>kecamatan/insert" method="post">
                            <div class="card-body">
								<div class="row">
                    			<div class="col-md-12">
                      			<div class="card card-info">
                        		<div class="card-header">
                         		<h3 class="card-title"></h3>
                        	</div>
                      	</div>
                    </div>

                                <div class="form-group col-8">
                                    <label for="exampleInputEmail1">Nama kecamatan :</label>
                                    <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan">
                                </div>

								<div class="form-group col-md-4">
                        			<label for="exampleInputEmail1">kabupaten :</label>
                        			<select id="id_kabupaten" name="id_kabupaten" class="form-control" required>
									<option value="">- Pilih -</option>
									<?php foreach($kabupaten as $row){ ?>
									<option value="<?= $row->id_kabupaten ?>"><?= $row->nama_kabupaten ?></option>
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